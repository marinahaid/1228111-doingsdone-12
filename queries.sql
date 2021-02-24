INSERT users (email, password, name) VALUES('alex123@gmail', 'Abwgd', 'Alex');
INSERT users (email, password, name) VALUES('maria123@gmail', 'aBwgd', 'Maria');
INSERT users (email, password, name) VALUES('mikki123@gmail', 'abWgd', 'Mikki');

INSERT categories (name, users_id) VALUES('Входящие', '1');
INSERT categories (name, users_id) VALUES('Учеба');
INSERT categories (name, users_id) VALUES('Работа');
INSERT categories (name, users_id) VALUES('Домашние дела');
INSERT categories (name, users_id) VALUES('Авто');

INSERT tasks (put_date, status, file, deadline, category_id) VALUES('10.02.2021', 'Невыполненые', '', '26.12.2021', '1');
INSERT tasks (put_date, status, file, deadline, category_id) VALUES('10.02.2021', 'Невыполненые', '', '25.12.2021');
INSERT tasks (put_date, status, file, deadline, category_id) VALUES('08.02.2021', 'Выполненые', '', '12.12.2021');
INSERT tasks (put_date, status, file, deadline, category_id) VALUES('10.02.2021', 'Невыполненые', '', '27.12.2021');

SELECT users_id, name FROM categories WHERE users_id = 1;
SELECT put_date, status, deadline FROM tasks WHERE category_id = 1;
SELECT * FROM tasks WHERE status = 1;
UPDATE tasks SET id = DEFAULT;
