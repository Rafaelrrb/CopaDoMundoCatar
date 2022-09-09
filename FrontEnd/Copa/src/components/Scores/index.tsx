import axios from "axios";
import { useQuery } from "react-query";

type Props = {
  idClaches: number,
}

type Log = {
  id: number;
  clashes_id: number;
  score_team_a: number,
	cardRed_team_a: number,
	cardYellow_team_a: number,
	score_team_b: number,
	cardRed_team_b: number,
	cardYellow_team_b: number,
}

export function Logs({idClaches}: Props){
  const {data , isFetching} = useQuery<Log[]>(`logs${idClaches}`, async ()=>{
    const response =  await axios.get(`http://127.0.0.1:8000/api/claches/${idClaches}/logs`)
    console.log(response.data.data)
    return response.data.data
  });


  return (
    <div>
      <ul className='list'>
        {isFetching && <p>Carregando...</p>}
        {data?.map( logs => {
          if(logs.clashes_id == idClaches){
          return(
            <li key={logs.id}>
              <p>Placar: {logs.score_team_a} - {logs.score_team_b}</p>
              <p>cartão vermelho: {logs.cardRed_team_a} - {logs.cardRed_team_b}</p>
              <p>cartão amarelo: {logs.cardYellow_team_a} - {logs.cardYellow_team_b}</p>
            </li>
          )}
        })}
      </ul>  
    </div>
    
  )
}