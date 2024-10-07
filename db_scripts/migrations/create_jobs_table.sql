CREATE TABLE jobs (
    id INT AUTO_INCREMENT PRIMARY KEY,  -- Unique identifier for each job
    job_title VARCHAR(255) NOT NULL,    -- Job title
    job_category VARCHAR(100) NOT NULL,  -- Job category
    job_location VARCHAR(255) NOT NULL,   -- Job location
    salary DECIMAL(10, 2) NOT NULL,       -- Salary, with two decimal places
    job_type VARCHAR(50) NOT NULL,        -- Job type (e.g., full-time, part-time)
    application_deadline DATE NOT NULL,    -- Application deadline
    job_description TEXT NOT NULL          -- Job description
);
