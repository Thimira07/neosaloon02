<?php
/**
 * Neo Salon Database Connection
 * MySQL database connection using mysqli
 */

// Database configuration
$servername = "localhost";     // Database server (usually localhost)
$username = "root";           // Database username (change as needed)
$password = "";               // Database password (change as needed)
$dbname = "neo_saloon_db";    // Database name

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Create connection with error handling
try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    
    // Set charset to utf8mb4 for full Unicode support (including emojis)
    if (!$conn->set_charset("utf8mb4")) {
        throw new Exception("Error loading character set utf8mb4: " . $conn->error);
    }
    
    // Optionally set timezone (uncomment if needed)
    // $conn->query("SET time_zone = '+05:30'"); // Sri Lanka timezone
    
} catch (Exception $e) {
    // Log error (in production, log to file instead of displaying)
    error_log("Database connection error: " . $e->getMessage());
    
    // Display user-friendly error message
    die("
    <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; padding: 20px; border: 1px solid #FFD700; border-radius: 10px; background: #FFF8DC;'>
        <h2 style='color: #B8860B; text-align: center;'>
            <i style='font-size: 2em;'>⚠️</i><br>
            Database Connection Error
        </h2>
        <p style='text-align: center; color: #666;'>
            We're experiencing technical difficulties. Please try again later.
        </p>
        <p style='text-align: center; margin-top: 20px;'>
            <a href='index.php' style='background: #FFD700; color: black; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-weight: bold;'>
                Return to Homepage
            </a>
        </p>
    </div>
    ");
}

/**
 * Function to safely close database connection
 */
function closeConnection() {
    global $conn;
    if ($conn && !$conn->connect_error) {
        $conn->close();
    }
}

/**
 * Function to execute prepared statements safely
 * Helps prevent SQL injection
 */
function executeQuery($query, $types = "", $params = []) {
    global $conn;
    
    try {
        $stmt = $conn->prepare($query);
        
        if (!$stmt) {
            throw new Exception("Prepare failed: " . $conn->error);
        }
        
        if (!empty($params)) {
            $stmt->bind_param($types, ...$params);
        }
        
        if (!$stmt->execute()) {
            throw new Exception("Execute failed: " . $stmt->error);
        }
        
        return $stmt;
        
    } catch (Exception $e) {
        error_log("Query execution error: " . $e->getMessage());
        return false;
    }
}

/**
 * Function to get all services grouped by category
 */
function getAllServices() {
    global $conn;
    
    $sql = "SELECT category, service_name, description, image_path 
            FROM services 
            WHERE is_active = 1 
            ORDER BY category, service_name";
    
    $result = $conn->query($sql);
    $services_by_category = [];
    
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $services_by_category[$row['category']][] = $row;
        }
    }
    
    return $services_by_category;
}

/**
 * Function to get featured services (one from each category)
 */
function getFeaturedServices() {
    global $conn;
    
    $sql = "SELECT DISTINCT category, 
                   (SELECT service_name FROM services s2 
                    WHERE s2.category = s1.category 
                    AND s2.is_active = 1 
                    ORDER BY RAND() LIMIT 1) as service_name,
                   (SELECT description FROM services s3 
                    WHERE s3.category = s1.category 
                    AND s3.is_active = 1 
                    ORDER BY RAND() LIMIT 1) as description
            FROM services s1 
            WHERE is_active = 1 
            GROUP BY category 
            LIMIT 4";
    
    $result = $conn->query($sql);
    $featured_services = [];
    
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $featured_services[] = $row;
        }
    }
    
    return $featured_services;
}

/**
 * Function to save contact form submission
 */
function saveContactMessage($name, $email, $phone, $message) {
    $query = "INSERT INTO contact_messages (name, email, phone, message) VALUES (?, ?, ?, ?)";
    $stmt = executeQuery($query, "ssss", [$name, $email, $phone, $message]);
    
    if ($stmt) {
        $stmt->close();
        return true;
    }
    
    return false;
}

/**
 * Function to save newsletter subscription
 */
function saveNewsletterSubscription($email) {
    // Check if email already exists
    $check_query = "SELECT id FROM newsletter_subscriptions WHERE email = ?";
    $check_stmt = executeQuery($check_query, "s", [$email]);
    
    if ($check_stmt && $check_stmt->get_result()->num_rows > 0) {
        $check_stmt->close();
        return "already_subscribed";
    }
    
    if ($check_stmt) {
        $check_stmt->close();
    }
    
    // Insert new subscription
    $insert_query = "INSERT INTO newsletter_subscriptions (email) VALUES (?)";
    $insert_stmt = executeQuery($insert_query, "s", [$email]);
    
    if ($insert_stmt) {
        $insert_stmt->close();
        return "success";
    }
    
    return "error";
}

/**
 * Function to validate and sanitize input
 */
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Function to validate email
 */
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Function to validate phone number (Sri Lankan format)
 */
function validatePhone($phone) {
    // Remove spaces and dashes
    $phone = preg_replace('/[\s\-]/', '', $phone);
    
    // Check Sri Lankan mobile number patterns
    $patterns = [
        '/^(\+94|0)?7[0-9]{8}$/',  // Mobile numbers
        '/^(\+94|0)?[1-9][0-9]{8}$/' // Landline numbers
    ];
    
    foreach ($patterns as $pattern) {
        if (preg_match($pattern, $phone)) {
            return true;
        }
    }
    
    return false;
}

// Register shutdown function to close connection
register_shutdown_function('closeConnection');

// Success message - remove in production
// echo "<!-- Database connected successfully -->";
?>