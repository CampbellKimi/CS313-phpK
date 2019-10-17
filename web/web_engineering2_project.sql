CREATE DATABASE rock_paper_scissors;


  CREATE TABLE results (
    game_id SERIAL PRIMARY KEY NOT NULL,
    win BOOLEAN,
    loss BOOLEAN,
    input VARCHAR(9) NOT NULL
    PRIMARY KEY (game_id)
  );

    CREATE TABLE wins (
    game_id INT NOT NULL REFERENCES results(game_id),
    win BOOLEAN,
    rock BOOLEAN NOT NULL, results,
    paper BOOLEAN NOT NULL,
    scissors BOOLEAN NOT NULL,
  );

    CREATE TABLE losses (
    game_id INT NOT NULL REFERENCES results(game_id),
    loss BOOLEAN,
    rock BOOLEAN NOT NULL,
    paper BOOLEAN NOT NULL,
    scissors BOOLEAN NOT NULL,
  );
