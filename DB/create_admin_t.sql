CREATE TABLE admin_t (
	mail_id VARCHAR(32) NOT NULL, 
	password VARCHAR(32) NOT NULL,
	CONSTRAINT admin_PK PRIMARY KEY (mail_id)
);