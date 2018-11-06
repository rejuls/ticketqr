
create database online_booking;

 create table user(id varchar(20) not null primary key,
                   name varchar(20) not null,
                   password varchar(20) not null,
                   email varchar(30) not null,
                   phone int not null,
                   credit int);
 create table bus(bus_no varchar(20) not null primary key,
                  name varchar(20) not null,
                  tot_seat int not null,
                  avail_seat int,
                  seat_pos varchar(5));
create table stand( stand_code varchar(20) not null primary key,
                    name varchar(20) not null,
                    bus_no varchar(20),
                    foreign key(bus_no) references bus(bus_no));
create table journey(journey_code varchar(20) not null primary key,
                     date date not null,
                     start_time time not null,
                     reach_time time not null,
                     bus_no varchar(20),
                     foreign key(bus_no) references bus(bus_no),
                     start_stand varchar(20),
                     foreign key(start_stand) references stand(stand_code),
                     end_stand varchar(20),
                     foreign key(end_stand) references stand(stand_code)); 
create table ticket( ticket_id varchar(20) not null primary key,
                     cost int not null,
                     id varchar(20),
                     foreign key(id) references user(id),
                     journey_code varchar(20),
                     foreign key(journey_code) references journey(journey_code));
create table train( train_no varchar(20) not null primary key,
                  name varchar(20) not null,
                  bogy_no varchar(5) not null,
                  tot_seat int not null,
                  avail_seat int,
                  seat_pos varchar(5));
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
create table passenger( id varchar(20) not null primary key,
                        age int not null,
                        name varchar(20) not null); 
    
