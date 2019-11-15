# CSC 33600 Project 2

This is the second project of database class.
In this project, I created a E/R diagram, and create some table based on the diagram. Last, I created a php file to management these database.

Here will show you how to use the php file.

## Database Area

- On the top of the page, you will see 7 table, They are CD, Producer, Produced, Supplier, Supplied, Customer, and VIP.

- THey will change when you Add Producer, Add CD, OR Borrow CD.

## Add Producer

- Producer have two attributes: name VARCHAR(30), and address VARCHAR(100).

## Add CD

- You have to provide the title, artist, type, supplier, and producer for the CD.

- If you leave blank for year, it will fill as NULL.

- title VARCHAR(30), artist VARCHAR(30), type VARCHAR(30), supplier VARCHAR(30), producer VARCHAR(30).

## Borrow CD

- You have to provide the name, SSN, and telephone number for the customer. And the title of the CD.

- If you are a VIP customer, check the box, and fill the string date of your membership.

- The default value for discount is 10

- The borrow time is allways the current time.

## Find Customer

- Provide the CD title will find who borrowed the CD, and which date it was borrowed.

## Find Producer

- Provide the CD artist and the year of the CD, you will see the information of the producer.
