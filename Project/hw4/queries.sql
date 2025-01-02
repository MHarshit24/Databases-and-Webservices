SELECT category.name, count(category.name) FROM item_category INNER JOIN purchase ON item_category.item_id = purchase.item_id
INNER JOIN category ON item_category.category_id = category.category_id GROUP BY category.name ; //Harshit

Get how popular is each category



SELECT item_id,count(item_id) as count_
FROM  purchase
WHERE purchase_date >= curdate() - 7 GROUP BY item_id
HAVING count_ > 2 ORDER BY count;//Andrey

Get books which was bought more then 2 times in last week



SELECT user_id, COUNT(user_id) as count_, GROUP_CONCAT(purchase_id) FROM purchase GROUP BY user_id;//Andrey

Get history for each user



SELECT * FROM item ORDER BY price desc;//Timur

Get books from expensive to cheap



SELECT borrow_id from borrow WHERE return_date <= CURDATE() + 7//Timur

Get which borrows will be returned in a week



SELECT * FROM book WHERE quantity <= 10//Harshit

Get books which soon will be out of stock



SELECT * FROM news WHERE date >= curdate() -7 //Andrey

Get news from last week



SELECT start_date, COUNT(simp_user.simp_user_id) as count_  //Timur
FROM simp_user 
WHERE start_date >= curdate() - 7 GROUP BY start_date 
ORDER BY count_;

Get how many users decided to get subscription in last week on each date



SELECT item.id, item.title,book.quantity FROM item INNER JOIN book ON item.id = book.id;//Harshit

Get some info about book