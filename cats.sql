CREATE TABLE `cats` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `cat_id` int(11) NOT NULL,
    `name` varchar(100) NOT NULL,
    `gender` varchar(100) NOT NULL,
    `breed` varchar(100) NOT NULL,
    `age` int(2) NOT NULL,
    `image` varchar(55) NOT NULL
)