INSERT users (email, password, name) VALUES('alex123@gmail', 'Abwgd', 'Alex');
INSERT users (email, password, name) VALUES('maria123@gmail', 'aBwgd', 'Maria');
INSERT users (email, password, name) VALUES('mikki123@gmail', 'abWgd', 'Mikki');

INSERT categories (name) VALUES('Входящие');
INSERT categories (name) VALUES('Учеба');
INSERT categories (name) VALUES('Работа');
INSERT categories (name) VALUES('Домашние дела');
INSERT categories (name) VALUES('Авто');

INSERT tasks (putdate, status, file, deadline) VALUES('10.02.2021', 'Невыполненые', 'img', '26.12.2021');
INSERT tasks (putdate, status, file, deadline) VALUES('10.02.2021', 'Невыполненые', 'img', '25.12.2021');
INSERT tasks (dputate, status, file, deadline) VALUES('08.02.2021', 'Выполненые', 'img', '12.12.2021');
INSERT tasks (putdate, status, file, deadline) VALUES('10.02.2021', 'Невыполненые', 'img', '27.12.2021');

SELECT id, name FROM categories WHERE users_id = 1;
SELECT date, status, deadline FROM tasks WHERE category_id = 1;
SELECT * FROM tasks WHERE status = 1;
UPDATE tasks SET id = DEFAULT;
