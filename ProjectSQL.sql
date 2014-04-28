Create Table Company(
  CName varchar(20) Primary Key REFERENCES Technical(Cname),
  City varchar(15),
  Country varchar(20)
);

Create Table Technical(
  Cname varchar(20) Not Null References Company(CName),
  Mname varchar(30) Not Null References Movie(MName),
  Runtime varchar(10) Primary Key,
  Sound varchar(15),
  Aspect varchar(10)
);

Create Table BoxOffice(
  Mname2 varchar(30) Not Null References Movie(MName),
  DayofWeek integer,
  MonthofYear varchar(10),
  YearRelease integer Not Null,
  Budget varchar(15),
  GrossIncome varchar(20) Not Null,
  Primary Key(DayofWeek, MonthofYear, YearRelease)
);

Create Table ActorActress(
  AName varchar(30) Primary Key,
  NumberMovies int
);

Create Table MoviesIn(
  AName varchar(30) References ActorActress(AName),
  Movies varchar(30)
);

Create Table Movie(
  MName varchar(30) Primary Key,
  Rating varchar(5) Not Null,
  Synopsis varchar(250),
  Weekday integer,
  MonthYear varchar(10),
  YearMade integer Not Null,
  CountryFilm varchar(20),
  CityFilm varchar(20)
);

Create Table Genre(
  MName varchar(30),
  Genres varchar(15) Not Null PRIMARY KEY,
  Foreign Key (MName) REFERENCES Movie(MName)
);