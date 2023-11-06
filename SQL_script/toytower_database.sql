

CREATE TABLE Users -- Create account
(
	UserID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Username varchar(50) NOT NULL,
    UserPass varchar(50) NOT NULL,
    UserFN varchar(50) NOT NULL,
    UserLN varchar(50) NOT NULL,
    UserEmail varchar(150) NOT NULL,
    Phone varchar(10) NOT NULL,
    PostalCode char(6) NOT NULL
)
;

CREATE TABLE Brands 
(
    BrandID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    BrandName varchar(50) NOT NULL,
    BrandImage varchar(150) NOT NULL, -- Path to Image
    Descript varchar(255) NOT NULL
)
;

CREATE TABLE AgeRanges 
(
    AgeRangeID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `Range` varchar(50) NOT NULL,
    AgeRangeImage varchar(150) NOT NULL, -- Path to Image
    Descript varchar(255) NOT NULL
)
;

CREATE TABLE Categories 
(
    CategoryID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    CategoryName varchar(50) NOT NULL,
    CategoryImage varchar(150) NOT NULL, -- Path to Image
    Descript varchar(255) NOT NULL
)
;

CREATE TABLE Toys 
(
	ToysID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ToyName varchar(255) NOT NULL,
    Price DECIMAL(10, 2) NOT NULL,
    Stock int NOT NUll,
    ToyImage varchar(150) NOT NULL, -- Path to Image
    BrandID int,
    AgeRangeID int,
    CategoryID int,
    Descript varchar(255) NOT NULL,
    FOREIGN KEY (BrandID) REFERENCES Brands(BrandID),
    FOREIGN KEY (AgeRangeID) REFERENCES AgeRanges(AgeRangeID),
    FOREIGN KEY (CategoryID) REFERENCES Categories(CategoryID)
)
;

CREATE TABLE email_subscriber (
    ID INT AUTO_INCREMENT,
    EmailAddress VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID)
);

/* Was never able to implement a purchases or transactions tables*/

/*
CREATE TABLE CartItems 
(
    CartItemID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    UserID int NOT NULL,
    ToysID int NOT NULL,
    Quantity int NOT NULL,
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (ToyID) REFERENCES Toys(ToyID)
);

CREATE TABLE Purchases 
(
	OrderID int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    UserID int NOT NULL,
    Quantity int NOT NULL,
    PurchaseDate DATETIME NOT NULL,
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
)
;
*/

/*
CREATE TABLE Transactions 
(
    OrderID INT,
    Total DECIMAL(10, 2),
    PRIMARY KEY (OrderID),
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
)
;

CREATE TABLE OrderItems 
(
    OrderItemID INT,
    OrderID INT,
    ProductID INT,
    Quantity INT,
    Subtotal DECIMAL(10, 2),
    PRIMARY KEY (OrderItemID),
    FOREIGN KEY (OrderID) REFERENCES Transactions(OrderID),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
)
;
*/





