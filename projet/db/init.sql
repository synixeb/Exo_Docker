CREATE DATABASE IF NOT EXISTS my_database;
USE my_database;

CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    message VARCHAR(255) NOT NULL
);

INSERT INTO messages (message) VALUES ('HELLO WORLD');
INSERT INTO messages (message) VALUES ('Vous savez je ne crois pas qu''il y ait de bonne ou de mauvaise situation.');
INSERT INTO messages (message) VALUES ('Moi, si je devais résumer ma vie aujourd''hui avec vous, je dirais que c''est d''abord des rencontres. ');
INSERT INTO messages (message) VALUES ('Des gens qui m''ont tendu la main, peut-être à un moment où je ne pouvais pas, où j''étais seul chez moi. ');
INSERT INTO messages (message) VALUES ('Et c''est assez curieux de se dire que les hasards, les rencontres forgent une destinée... ');
INSERT INTO messages (message) VALUES ('Parce que quand on a le goût de la chose, quand on a le goût de la chose bien faite, le beau geste, parfois on ne trouve pas l''interlocuteur en face je dirais, ');
INSERT INTO messages (message) VALUES ('le miroir qui vous aide à avancer. Alors ce n''est pas mon cas, comme je le disais là, puisque moi au contraire, j''ai pu : et je dis merci à la vie, je lui dis merci, ');
INSERT INTO messages (message) VALUES ('je chante la vie, je danse la vie... je ne suis qu''amour ! Et finalement, quand beaucoup de gens aujourd''hui me disent "Mais comment fais-tu pour avoir cette humanité ?",');
INSERT INTO messages (message) VALUES ('eh bien je leur réponds très simplement, je leur dis que c''est ce goût de l''amour, ce goût donc qui m''a poussé aujourd''hui à entreprendre une construction mécanique,');
INSERT INTO messages (message) VALUES ('mais demain qui sait ? Peut-être simplement à me mettre au service de la communauté, à faire le don, le don de soi...');
