 create table user(id int not null primary key AUTO_INCREMENT ,
                   name varchar(20) not null,
                   password varchar(20) not null,
                   email varchar(30) not null,
                   phone int not null,
                   credit int DEFAULT '500');
 create table bus(bus_no varchar(20) not null primary key,
                  name varchar(20) not null);
create table stand( stand_code varchar(20) not null primary key,
                    name varchar(20) not null);
create table journey(journey_code varchar(20) not null primary key,
                     journey_date date not null,
                     tot_seat int DEFAULT '50',
                     avail_seat int DEFAULT '50',
                     bus_no varchar(20),
                     foreign key(bus_no) references bus(bus_no));

create table route(id int not null primary key AUTO_INCREMENT,
                    bus_no varchar(20) not null,
                     foreign key(bus_no) references bus(bus_no),
                    stand_code varchar(20) not null,
                    foreign key(stand_code) references stand(stand_code),
                    start_time time not null,
                    fare int not null);
create table ticket( ticket_id int not null primary key AUTO_INCREMENT,
                     cost int not null,
                     id int,
                     foreign key(id) references user(id),
                     phone int not null,
                     start_stand varchar(20),
                     end_stand varchar(20),
                     journey_date varchar(20),
                     start_time time not null,
                     reach_time time not null,
                     bus_no varchar(20),
                     foreign key(bus_no) references bus(bus_no));
create table train( train_no varchar(20) not null primary key,
                  name varchar(20) not null,
                  bogy_no varchar(5) not null,
                  tot_seat int not null,
                  avail_seat int);
create table station( station_code varchar(20) not null primary key,
                    name varchar(20) not null,
                    train_no varchar(20),
                    foreign key(train_no) references train(train_no));
create table travel(travel_code varchar(20) not null primary key,
                     date date not null,
                     start_time time not null,
                     reach_time time not null,
                     train_no varchar(20),
                     foreign key(train_no) references train(train_no),
                     start_station varchar(20),
                     foreign key(start_station) references station(station_code),
                     end_station varchar(20),
                     foreign key(end_station) references station(station_code));
create table passenger( id int not null primary key AUTO_INCREMENT,
                        age int not null,
                        name varchar(20) not null);
create table message( id int not null primary key AUTO_INCREMENT,
			name varchar(20) not null,
			email varchar(30) not null,
      phone int not null,
			message longtext not null);
