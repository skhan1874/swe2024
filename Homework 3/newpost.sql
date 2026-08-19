
DROP TABLE IF EXISTS post;

CREATE TABLE post (
    post_id INTEGER(6) PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    ptitle VARCHAR(40) NOT NULL, 
    comments VARCHAR(250) NOT NULL, 
    emotions VARCHAR(15) NOT NULL,
    tags VARCHAR(40)
);

INSERT INTO post (ptitle,comments, emotions, tags) 
VALUES ('School Work', 'I have a lot going on', 'Crazy Day', 'IS 448');
