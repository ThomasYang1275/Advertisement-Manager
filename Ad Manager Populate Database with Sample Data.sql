INSERT INTO Category (Category_ID, Category_Name)
VALUES ('CAT', 'Cars and Trucks'), 
('HOU', 'Housing'),
('ELC', 'Electronics'),
('CCA', 'Child Care');

INSERT INTO AdStatus (Status_ID, Status_Name)
VALUES ('PN', 'Pending'), 
('AC', 'Active'),
('DI', 'Disapproved');

INSERT INTO AdUser (User_ID, User_FName, User_LName, Acc_Password)
VALUES ('Jsmith', 'John', 'Smith', '$2y$10$Kk/7fWn4KWXuBtc8CdPTJ.YHGMfVjVeH.uax/oyXV9QUY.1Jpv9WG'), 
('Ajackson', 'Ann', 'Jackson', '$2y$10$Kk/7fWn4KWXuBtc8CdPTJ.YHGMfVjVeH.uax/oyXV9QUY.1Jpv9WG'),
('Rkale', 'Rania', 'Kale', '$2y$10$yMAAZ230VpSjR5D5yYhJEeFHWjhieSvRac3LOmPnis5fezEqCC1XO'),
('Sali', 'Samir', 'Ali', '$2y$10$yMAAZ230VpSjR5D5yYhJEeFHWjhieSvRac3LOmPnis5fezEqCC1XO');

INSERT INTO Moderator (User_ID)
VALUES ('Jsmith'),
('Ajackson');

INSERT INTO Ad (Ad_Title, Ad_Details, Ad_Date_Time, Price, CategID, UserID, ModID, StatusID)
VALUES ('2010 Sedan Subaru','2010 sedan car in great shape for sale','2017-02-10','6000','CAT','Rkale','Jsmith', 'AC'),
('Nice Office Desk','Nice office desk for sale','2017-02-15','50.25','HOU','Rkale','Jsmith', 'AC'),
('Smart LG TV for $200 ONLY','Smart LG TV 52 inches! Really cheap!','2017-03-15','200','ELC','Sali','Jsmith', 'AC'),
('HD Tablet for $25 only','Amazon Fire Tablet HD','2017-03-20','25','ELC','Rkale', Null , 'PN'),
('Laptop for $100','Amazing HP laptop for $100','2017-03-20','100','ELC','Rkale', Null , 'PN');

SELECT *
FROM Ad;

delete from ad where Ad_ID > 5;

drop table ad;