import axios from "axios";
import { useQuery } from "react-query"
import { Players } from "../../components/Players";


const url = "http://127.0.0.1:8000/api/team/"

type Team = {
  id: number,
  name: string,
}

export function Team(){
  const {data , isFetching} = useQuery<Team[]>('team', async ()=>{
    const response =  await axios.get(url)
    console.log(response.data.data)
    return response.data.data
  });

  return (
    <div className="conteiner-sub">
      <ul className='list-sub'>
        {isFetching && <p>Carregando...</p>}
        {data?.map( team => {
          return(
            <div>
              <li key={team.id}>
                <p>{team.name}</p>
                
                <Players idTeam={team.id} />
              </li>
            </div>
          )
        })}
      </ul>  
    </div>
    
  )
}