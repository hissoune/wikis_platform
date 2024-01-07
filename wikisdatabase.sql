-- Drop existing database
DROP DATABASE IF EXISTS wikis_platform;

-- Create a new database
CREATE DATABASE wikis_platform;

-- Use the new database
USE wikis_platform;

-- Table: users
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'author') DEFAULT 'author'
);

-- Table: categories
CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

-- Table: tags
CREATE TABLE tags (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL
);

-- Table: wikis
CREATE TABLE wikis (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    author_id INT,
    category_id INT,
    image_filename VARCHAR(255),  -- Added column for image filename
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE SET NULL
);

-- Associative table: wikis_tags
CREATE TABLE wikis_tags (
    wiki_id INT,
    tag_id INT,
    PRIMARY KEY (wiki_id, tag_id),
    FOREIGN KEY (wiki_id) REFERENCES wikis(id) ON DELETE CASCADE,
    FOREIGN KEY (tag_id) REFERENCES tags(id) ON DELETE CASCADE
);


INSERT INTO users (name, email, password, role) VALUES
    ('Admin 1', 'admin1@example.com', 'adminpassword1', 'admin'),
    ('Admin 2', 'admin2@example.com', 'adminpassword2', 'admin');

-- Insert two author users
INSERT INTO users (name, email, password, role) VALUES
    ('Author 1', 'author1@example.com', 'authorpassword1', 'author'),
    ('Author 2', 'author2@example.com', 'authorpassword2', 'author');

    INSERT INTO categories (name) VALUES
    ('Technology'),
    ('Science'),
    ('History'),
    ('Art'),
    ('Sports'),
    ('Travel'),
    ('Health'),
    ('Food'),
    ('Music'),
    ('Literature');

    INSERT INTO tags (name) VALUES
    ('Programming'),
    ('Science Fiction'),
    ('History'),
    ('Abstract Art'),
    ('Football'),
    ('Rock Music'),
    ('Nature'),
    ('Cuisine'),
    ('Classic Literature'),
    ('Fitness');

    INSERT INTO wikis (title, content, author_id, category_id, image_filename) VALUES
    ('Wiki 1', 'Content for Wiki 1', 3, 2, 'image1.jpg'),
    ('Wiki 2', 'Content for Wiki 2', 4, 1, 'image2.jpg'),
    ('Wiki 3', 'Content for Wiki 3', 3, 3, 'image3.jpg'),
    ('Wiki 4', 'Content for Wiki 4', 3, 4, 'image4.jpg'),
    ('Wiki 5', 'Content for Wiki 5', 4, 5, 'image5.jpg'),
    ('Wiki 6', 'Content for Wiki 6', 4, 1, 'image6.jpg'),
    ('Wiki 7', 'Content for Wiki 7', 3, 2, 'image7.jpg'),
    ('Wiki 8', 'Content for Wiki 8', 3, 3, 'image8.jpg'),
    ('Wiki 9', 'Content for Wiki 9', 4, 4, 'image9.jpg'),
    ('Wiki 10', 'Content for Wiki 10', 4, 5, 'image10.jpg');

    INSERT INTO wikis_tags (wiki_id, tag_id) VALUES
    (1, 3), -- Wiki 1 associated with tag 3
    (2, 4), -- Wiki 2 associated with tag 4
    (3, 5), -- Wiki 3 associated with tag 5
    (4, 6), -- Wiki 4 associated with tag 6
    (5, 7), -- Wiki 5 associated with tag 7
    (6, 8), -- Wiki 6 associated with tag 8
    (7, 9), -- Wiki 7 associated with tag 9
    (8, 10), -- Wiki 8 associated with tag 10
    (9, 1), -- Wiki 9 associated with tag 1
    (10, 2);