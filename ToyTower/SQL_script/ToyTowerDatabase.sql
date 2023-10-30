/*

CREATE TABLE Customers (
    CustomerID INT AUTO_INCREMENT,
    Address VARCHAR(255),
    PostalCode VARCHAR(10),
    `Name` VARCHAR(255),
    TelephoneNumber VARCHAR(15),
    PRIMARY KEY (CustomerID)
);

CREATE TABLE Brands (
    BrandID INT AUTO_INCREMENT,
    Name VARCHAR(255),
    PRIMARY KEY (BrandID)
);

CREATE TABLE AgeRanges (
    AgeRangeID INT AUTO_INCREMENT,
    `Range` VARCHAR(255),
    PRIMARY KEY (AgeRangeID)
);

CREATE TABLE Categories (
    CategoryID INT AUTO_INCREMENT,
    `Name` VARCHAR(255),
    PRIMARY KEY (CategoryID)
);

CREATE TABLE Products (
    ProductID INT,
    `Name` VARCHAR(255),
    BrandID INT,
    AgeRange INT,
    CategoryID INT,
    PRIMARY KEY (ProductID),
    FOREIGN KEY (BrandID) REFERENCES Brands(BrandID),
    FOREIGN KEY (AgeRange) REFERENCES AgeRanges(AgeRangeID),
    FOREIGN KEY (CategoryID) REFERENCES Categories(CategoryID)
);

CREATE TABLE Transactions (
    OrderID INT,
    CustomerID INT,
    ProductID INT,
    Total DECIMAL(10, 2),
    PRIMARY KEY (OrderID),
    FOREIGN KEY (CustomerID) REFERENCES Customers(CustomerID),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);

CREATE TABLE OrderItems (
    OrderItemID INT,
    OrderID INT,
    ProductID INT,
    Quantity INT,
    Subtotal DECIMAL(10, 2),
    PRIMARY KEY (OrderItemID),
    FOREIGN KEY (OrderID) REFERENCES Transactions(OrderID),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);

*/