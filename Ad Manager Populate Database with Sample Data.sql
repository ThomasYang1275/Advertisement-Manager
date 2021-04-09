INSERT INTO Category (Category_ID, Category_Name)
VALUES ('CAT', 'Cars and Trucks'), 
('HOU', 'Housing'),
('ELC', 'Electronics'),
('CCA', 'Child Care');

INSERT INTO AdStatus (Status_ID, Status_Name)
VALUES ('PN', 'Pending'), 
('AC', 'Active'),
('DI', 'Disapproved');

INSERT INTO AdUser (User_ID, User_FName, User_LName)
VALUES ('Jsmith', 'John', 'Smith'), 
('Ajackson', 'Ann', 'Jackson'),
('Rkale', 'Rania', 'Kale'),
('Sali', 'Samir', 'Ali');

INSERT INTO Moderator (User_ID)
VALUES ('Jsmith'),
('Ajackson');

INSERT INTO Ad (Ad_ID, Ad_Title, Ad_Details, Ad_Date_Time, Price, CategID, UserID, ModID, StatusID)
VALUES ('1','2010 Sedan Subaru','2010 sedan car in great shape for sale','2017-02-10','6000','CAT','Rkale','Jsmith', 'AC'),
('2','Nice Office Desk','Nice office desk for sale','2017-02-15','50.25','HOU','Rkale','Jsmith', 'AC'),
('3','Smart LG TV for $200 ONLY','Smart LG TV 52 inches! Really cheap!','2017-03-15','200','ELC','Sali','Jsmith', 'AC'),
('4','HD Tablet for $25 only','Amazon Fire Tablet HD','2017-03-20','25','ELC','Rkale', Null , 'PN'),
('5','Laptop for $100','Amazing HP laptop for $100','2017-03-20','100','ELC','Rkale', Null , 'PN');
