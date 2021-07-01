create database if not exists tender;
use tender;

drop table if exists roles;
create table roles(
	id int(20) primary key auto_increment,
	name varchar(50)	
);
insert into roles(name)values('Admin');
insert into roles(name)values('Editor');
insert into roles(name)values('Member');


drop table if exists users;
create table users(
	id int(10) primary key auto_increment,
	username varchar(20) not null,
	email varchar(20),
	role_id int(10),
	password varchar (50)
);
insert into users(username,email,password,role_id)values('milon','milon@gmal.com','12345',1);
insert into users(username,email,password,role_id)values('samsur','samsur@gmail.com','98765',2);

insert into admins(name,image,email,password)values('milon','1.jpg','milonatoy@gmail.com',123);


drop table if exists cliend;
create table cliend(
	id int(10) primary key auto_increment,
	email varchar(30),
	phone int(15),
	companyname varchar(50) not null,
	password varchar (20),
	division varchar(20)	
);
insert into cliend(email,phone,companyname,password,division)values('milon@gmail.com','01796794989','stk','12345','Bangladesh');
insert into cliend(email,phone,companyname,password,division)values('samsur@gmail.com','01543267808','mssoftware','11111','London');


drop table if exists tender_details;
create table tender_details(
	id int(10) primary key auto_increment,
    reg_document varchar(20),
	trade varchar(20),
	tin varchar(20),
	vat varchar(20),
	authorized_letter varchar(20),
	nid varchar(20),
	egp_reg varchar(20),
	adminimage varchar(20)
);
insert into tender_details(reg_document,trade,tin,vat,authorized_letter,nid,egp_reg,adminimage)values("reg.pdf","trad.pdf","tin.pdf","vat.pdf","autho.pdf","nid.pdf","egp.pdf","adm.pdf");


drop table if exists department;
create table department(
	id int(10) primary key auto_increment,
    name varchar(100)
);
insert into department(name)values("Real estate services");
insert into department(name)values("Computer and related services");
insert into department(name)values("Education services");


drop table if exists tendersupload;
create table tendersupload(
	id int(10) primary key auto_increment,
    department_id varchar(100),
	catagory_id varchar(10),
	Tender_id varchar(20),
	location varchar(50),
	description varchar(9000),
	security_price varchar(20),
	budget_price varchar(20),
	date_time varchar(20),
	capacity varchar(500),
	experience varchar(500),
	turnover varchar(500),
	type varchar(40),
	credit_line varchar(500)
);
insert into tendersupload(department_id,catagory_id,Tender_id,location,description,security_price,budget_price,date_time,capacity,experience,turnover,type,credit_line)values("1","2","1295","Rangpur","Write tender description","100000","50000","10-04-2021","Write capacity","Write experience","Write turnover 500 word","Road","Write cradit Line 500 word");


drop table if exists tourism;
create table tourism(
	id int(10) primary key auto_increment,
	image varchar(1000),
    title varchar(100),
	discription varchar(5000)
);
insert into tourism(image,title,discription)values("1616932190.gif","Cox-Bazar","Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum voluptatum, mollitia error vel cupiditate optio quas.");


drop table if exists traningreg;
create table traningreg(
	id int(10) primary key auto_increment,
	name varchar(30),
	fathername varchar(30),
	mothername varchar(30),
    designation varchar(30),
	organization varchar(100),
	address varchar(200),
	mobil varchar(15),
	email varchar(20),
	vanu varchar(20)
);
insert into traningreg(name,fathername,mothername,designation,organization,address,mobil,email,vanu)values("kalam","A","B","Manager","msfarm","dhaka","01743256784","kalam@gmail.com","Our vanue");


drop table if exists dropidea;
create table dropidea(
	id int(10) primary key auto_increment,
	name varchar(30),
    mobil varchar(15),
	email varchar(20),
	address varchar(100),
	idea varchar(100)
);
insert into dropidea(name,mobil,email,address,idea)values("kalam","01743256784","kalam@gmail.com","dhaka","This is really good");

drop table if exists country;
create table country(
	id int(10) primary key auto_increment,
	name varchar(30)
);
insert into country(name)values("Bangladesh");


drop table if exists catagory;
create table catagory(
	id int(10) primary key auto_increment,
    name varchar(100)
);
insert into catagory(name)values("Road");
insert into catagory(name)values("River");

drop table if exists pay_data;
create table pay_data(
	id int(10) primary key auto_increment,
	customar_name varchar(30),
	mobil varchar(30),
	Email varchar(30),
	address varchar(100),
	amount varchar(20),
	ref_id varchar(100)
);
insert into pay_data(customar_name,mobil,Email,address,amount,ref_id)values("Milon","01796794989","milonatoy@gmail.com","Dhaka","10","milondhaka");



