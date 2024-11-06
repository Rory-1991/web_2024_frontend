-- 新增資料表
CREATE TABLE `student_list`.`teacher` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(10) NOT NULL,
    `mobile` VARCHAR(15) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

--新增資料內容 
INSERT INTO
    `student_table` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'amy', '0911-111-111')
INSERT INTO
    `student_table` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'bob', '0922-222-222')
INSERT INTO
    `student_table` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'cat', '0933-333-333')
INSERT INTO
    `student_table` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'dog', '0944-444-444')
INSERT INTO
    `student_table` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'egg', '0955-555-555');