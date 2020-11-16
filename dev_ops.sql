create database khamarbari;

use khamarbari;
insert into products(prod_name, qty_or_wt, price, img_url) values 
('Red (Brown) Sugar', '1 kg', 75,'/images/products/3.jpg'),
('Hand Made Puffed Rice (From Barishal)', '1 kg', 80, '/images/products/12.jpg'),
('Brown Atta', '1 kg', 55, '/images/products/3.jpg'),
('Sundarban Natural Honey', '500 gm', 434, '/images/products/7.png'),
('Virgin Coconut Oil', '1 litre', 220, '/images/products/6.jpg'),
('Organic Egg', '1 dogen', 185, '/images/products/11.jpg'),
('Mustard Oil', '500 ml',335, '/images/products/1.jpg'),
('Laccha Semai', '400 gm', 125, '/images/products/9.jpg'),
('Mariyum Dates', '500 gm', 550, '/images/products/2.jpg'),
('Black seed oil', '100 ml', 190, '/images/products/11.jpg'),
('Black Seed', '100 gm', 60, '/images/products/5.jpg'),
('Mustard Oil', '500 ml', 120, '/images/products/7.png'),
('Sundarban Natural Honey', '250 gm', 320, '/images/products/10.jpg');

alter table products add column img_url varchar(100);

truncate table products;

drop table products;

select * from products;

delete from products where prod_name is null;

select * from users;
set sql_mode='';
update users set isAdmin=0 where id=1;

update users set isAdmin=1 where id=2;

update products set category = 'Grocery' where id in (1,3,5,7,10) ;
update products set category = 'Snacks & Refreshment' where id = 2;
update products set category = 'Pickle & Chutney' where id =6;
update products set category = 'Honey' where id in (4,11,12,13);

select * from blogs group by category;

create table khamarbari.daily_data as
select * from a2i_db.daily_data; 