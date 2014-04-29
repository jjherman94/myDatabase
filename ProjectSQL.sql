Create Table Company(
  CName varchar(30) Primary Key REFERENCES Technical(Cname),
  City varchar(15),
  Country varchar(20)
);

Create Table Technical(
  Cname varchar(30) Not Null References Company(CName),
  Mname varchar(50) Not Null References Movie(MName),
  Runtime varchar(10),
  Sound varchar(15),
  Aspect varchar(10),
  Primary Key(Mname, Runtime)
);

Create Table BoxOffice(
  Mname2 varchar(50) Not Null References Movie(MName),
  DayofWeek integer,
  MonthofYear varchar(10),
  YearRelease integer Not Null,
  Budget varchar(15),
  GrossIncome varchar(20) Not Null,
  Primary Key(Mname2, DayofWeek, MonthofYear, YearRelease)
);

Create Table ActorActress(
  AName varchar(50) Primary Key,
  NumberMovies int
);

Create Table MoviesIn(
  AName varchar(50) References ActorActress(AName),
  Movies varchar(50)
);

Create Table Series(
  MName varchar(50) References Movie(MName),
  SeriesName varchar(30),
  Primary Key(SeriesName, MName)
);

Create Table Movie(
  MName varchar(50) Primary Key,
  Rating varchar(5) Not Null,
  Synopsis varchar(250),
  Weekday integer,
  MonthYear varchar(10),
  YearMade integer Not Null,
  CountryFilm varchar(20),
  CityFilm varchar(20)
);

Create Table Genre(
  MName varchar(50),
  Genres varchar(15) ,
  Primary Key(MName, Genres),
  Foreign Key (MName) REFERENCES Movie(MName)
);