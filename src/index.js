import './index.scss';
import {createBracket} from 'bracketry';

const tournamentBrackets = document.querySelector('#tournament-brackets');

if (tournamentBrackets) {
  const tournamentOptions = JSON.parse(
      tournamentBrackets.getAttribute('data-tournament-options'));
  console.log(tournamentOptions);

  createBracket(tournamentOptions, tournamentBrackets, {width: '100%'});
}


