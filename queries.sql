INSERT users (email, password, name) VALUES('alex123@gmail', 'Abwgd', 'Alex');
INSERT users (email, password, name) VALUES('maria123@gmail', 'aBwgd', 'Maria');
INSERT users (email, password, name) VALUES('mikki123@gmail', 'abWgd', 'Mikki');

INSERT categories (category) VALUES('Входящие');
INSERT categories (category) VALUES('Учеба');
INSERT categories (category) VALUES('Работа');
INSERT categories (category) VALUES('Домашние дела');
INSERT categories (category) VALUES('Авто');

INSERT tasks (date_added, status_task, task_file, date_end) VALUES('10.02.2021', 'Невыполненые', 'img/photo', '26.12.2021');
INSERT tasks (date_added, status_task, file_task, date_end) VALUES('10.02.2021', 'Невыполненые', 'img/photo', '25.12.2021');
INSERT tasks (date_added, status_task, file_task, date_end) VALUES('08.02.2021', 'Выполненые', 'img/photo', '12.12.2021');
INSERT tasks (date_added, status_task, file_task, date_end) VALUES('10.02.2021', 'Невыполненые', 'img', '27.12.2021');

SELECT * FROM categories с JOIN users u ON c.id = u.id;
