CREATE USER frey WITH PASSWORD 'pgpass';
CREATE DATABASE frey;
CREATE DATABASE frey_unit;
ALTER DATABASE frey OWNER TO frey;
ALTER DATABASE frey_unit OWNER TO frey;
