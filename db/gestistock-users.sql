-- gestistock-users.sql — export de la table `users` (GestiStock 2009).
-- Oui, les mots de passe sont en MD5. En 2009 on trouvait ça "sécurisé".
-- (spoiler 2026 : le MD5 se casse en une recherche Google. Ne stockez JAMAIS un mdp comme ça.)
-- Migration vers un vrai hash (bcrypt/argon2) : "prévue". Depuis 2009.

CREATE TABLE users (
  id       INT PRIMARY KEY,
  login    VARCHAR(50),
  password VARCHAR(32)   -- 32 caractères hexa = un hash MD5 tout nu, sans sel. l'horreur.
);

INSERT INTO users (id, login, password) VALUES
  (1, 'admin',  'ab4f63f9ac65152575886860dde480a1'),  -- le mdp de l'admin. bon courage. (enfin, non, aucun courage requis)
  (2, 'gerard', '2a9d119df47ff993b662a8ef36f9ea20'),  -- le mien. changé souvent. jamais assez.
  (3, 'invite', 'd41d8cd98f00b204e9800998ecf8427e');  -- mot de passe VIDE. le fameux compte invité de JMR.

-- note : le hash de l'admin, une fois "cassé", donne un mot de passe qu'on retrouve dans TOUTES
-- les listes des pires mots de passe du monde. Le flag, c'est ce mot de passe : FLAG{ce-mot-de-passe}.
