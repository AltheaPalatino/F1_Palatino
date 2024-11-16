CREATE TABLE user_accounts (
	user_id INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(255),
	first_name VARCHAR(255),
	last_name VARCHAR(255),
	password TEXT,
	date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);

create table search_applicant (
	id INT AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(255),
	last_name VARCHAR(255),
	email VARCHAR(255),
	gender VARCHAR(255),
	address VARCHAR(255),
    job_position VARCHAR(255),
    application_status VARCHAR (255),
	date_applied TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (1, 'John', 'Doe', 'johndoe@example.com', 'Male', '123 Main St, New York, NY, USA', 'Software Engineer', 'Pending');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (2, 'Jane', 'Smith', 'janesmith@example.com', 'Female', '456 Elm St, Los Angeles, CA, USA', 'Quality Analyst', 'Reviewed');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (3, 'Alice', 'Brown', 'alicebrown@example.com', 'Female', '789 Oak St, London, England', 'Data Scientist', 'Accepted');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (4, 'Bob', 'Johnson', 'bobjohnson@example.com', 'Male', '101 Pine St, Toronto, Ontario, Canada', 'Project Manager', 'Rejected');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (5, 'Charlie', 'Davis', 'charliedavis@example.com', 'Non-binary', '102 Maple St, Sydney, NSW, Australia', 'UI/UX Designer', 'Pending');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (6, 'David', 'Wilson', 'davidwilson@example.com', 'Male', '103 Cedar St, Dublin, Ireland', 'Network Engineer', 'Pending');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (7, 'Emma', 'Clark', 'emmaclark@example.com', 'Female', '104 Willow St, Paris, France', 'Technical Writer', 'Reviewed');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (8, 'Frank', 'Green', 'frankgreen@example.com', 'Male', '105 Birch St, Berlin, Germany', 'Database Administrator', 'Accepted');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (9, 'Grace', 'Lee', 'gracelee@example.com', 'Female', '106 Poplar St, Tokyo, Japan', 'Business Analyst', 'Rejected');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (10, 'Henry', 'Young', 'henryyoung@example.com', 'Male', '107 Cypress St, Seoul, South Korea', 'DevOps Engineer', 'Pending');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (11, 'Ivy', 'Baker', 'ivybaker@example.com', 'Female', '108 Palm St, Cape Town, South Africa', 'Security Analyst', 'Reviewed');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (12, 'Jack', 'Harris', 'jackharris@example.com', 'Male', '109 Redwood St, São Paulo, Brazil', 'Cloud Engineer', 'Accepted');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (13, 'Kara', 'Martin', 'karamartin@example.com', 'Female', '110 Pine St, Rome, Italy', 'Product Manager', 'Pending');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (14, 'Liam', 'King', 'liamking@example.com', 'Male', '111 Elm St, Dubai, UAE', 'Sales Manager', 'Rejected');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (15, 'Mia', 'Scott', 'miascott@example.com', 'Female', '112 Maple St, Mumbai, India', 'Marketing Specialist', 'Reviewed');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (16, 'Noah', 'Hill', 'noahhill@example.com', 'Male', '113 Cedar St, Auckland, New Zealand', 'Graphic Designer', 'Pending');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (17, 'Olivia', 'Evans', 'oliviaevans@example.com', 'Female', '114 Oak St, Singapore', 'Social Media Manager', 'Accepted');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (18, 'Paul', 'Adams', 'pauladams@example.com', 'Male', '115 Birch St, Hong Kong', 'Finance Analyst', 'Pending');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (19, 'Quinn', 'Campbell', 'quinncampbell@example.com', 'Non-binary', '116 Poplar St, Mexico City, Mexico', 'Research Scientist', 'Rejected');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (20, 'Rachel', 'Mitchell', 'rachelmitchell@example.com', 'Female', '117 Cypress St, Istanbul, Turkey', 'Operations Manager', 'Reviewed');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (21, 'Sam', 'Morgan', 'sammorgan@example.com', 'Male', '118 Redwood St, Moscow, Russia', 'IT Support Specialist', 'Pending');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (22, 'Tina', 'Cooper', 'tinacooper@example.com', 'Female', '119 Palm St, Bangkok, Thailand', 'Human Resources', 'Accepted');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (23, 'Umar', 'Parker', 'umarparker@example.com', 'Male', '120 Pine St, Nairobi, Kenya', 'Compliance Officer', 'Rejected');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (24, 'Vera', 'Collins', 'veracollins@example.com', 'Female', '121 Elm St, Jakarta, Indonesia', 'Logistics Manager', 'Reviewed');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (25, 'Will', 'Reed', 'willreed@example.com', 'Male', '122 Maple St, Vienna, Austria', 'Accountant', 'Pending');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (26, 'Xena', 'Long', 'xenalong@example.com', 'Female', '123 Cedar St, Lisbon, Portugal', 'Event Coordinator', 'Accepted');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (27, 'Yara', 'Carter', 'yaracarter@example.com', 'Female', '124 Oak St, Buenos Aires, Argentina', 'Public Relations', 'Pending');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (28, 'Zane', 'James', 'zanejames@example.com', 'Male', '125 Birch St, Cairo, Egypt', 'Customer Support', 'Rejected');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (29, 'Amelia', 'Bryant', 'ameliabryant@example.com', 'Female', '126 Poplar St, Amsterdam, Netherlands', 'Training Specialist', 'Reviewed');
insert into search_applicant (id, first_name, last_name, email, gender, address, job_position, application_status) VALUES (30, 'Benjamin', 'Diaz', 'benjamindiaz@example.com', 'Male', '127 Cypress St, Zurich, Switzerland', 'Software Tester', 'Pending');
