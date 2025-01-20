import './index.scss';
import {createBracket} from 'bracketry';

const tournamentBrackets = document.querySelector('#tournament-brackets');

if (tournamentBrackets) {
  createBracket({
    rounds: [
      {name: 'Viertelfinale'},
      {name: 'Halbfinale'},
      {name: 'Finale'},
    ],
    matches: [
      {
        roundIndex: 0,
        order: 0,
        sides: [
          {
            contestantId: '163911',
            currentScore: '20',
            isWinner: true,
          },
          {
            contestantId: '163806',
            currentScore: '5',
          },
        ],
      },
      {
        roundIndex: 0,
        order: 3,
        sides: [
          {
            contestantId: '163911',
            scores: [
              {
                mainScore: '16',
                isWinner: true,
              },
            ],
            isWinner: true,
          },
          {
            contestantId: '163806',
            scores: [
              {
                mainScore: '5',
              },
            ],
          },
        ],
      },
    ],
    contestants: {
      163806: {
        players: [
          {title: 'Team One'},
        ],
      },
      163911: {
        players: [
          {title: 'Team Two'},
        ],
      },
    },
  }, tournamentBrackets, {
    width: '100%'
  });
}


