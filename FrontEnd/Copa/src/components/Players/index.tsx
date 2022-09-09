import axios from "axios";
import { useQuery } from "react-query";

type Props = {
  idTeam: number,
}

type Player = {
  id: number,
  name: string,
  shirt: number
}

export function Players({idTeam}: Props){
  const {data , isFetching} = useQuery<Player[]>(`player${idTeam}`, async ()=>{
    const response =  await axios.get(`http://127.0.0.1:8000/api/team/${idTeam}/players`)
    console.log(response.data)
    return response.data
  });


  return (
    <div >
      <ul className='list-sub'>
        {isFetching && <p>Carregando...</p>}
        {data?.map( player => {
          return(
            <li key={player.id}>
              <p>Nome: {player.name}</p>
              <p>Camisa: {player.shirt}</p>
            </li>
          )
        })}
      </ul>  
    </div>
    
  )
}