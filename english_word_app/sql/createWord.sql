CREATE TABLE words(
    id int NOT NULL primary key,
    english_word varchar(50) NOT NULL,
    japanese_word varchar(50) NOT NULL,
    rememberedFG bit(1) NOT NULL
);

/* csvデータの取り込み
load data local INFILE "wordstable.csv "
into table words
fields terminated by ','
optionally enclosed by '"';
*/