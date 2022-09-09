import axios from "axios";
import { useQuery } from "react-query"
import { Logs } from "../../components/Scores";

const url = "http://127.0.0.1:8000/api/claches"

type Clashes = {
  id: number,
  name_team_a: string,
  name_team_b: string
}
export function Clashes(){
  const {data , isFetching} = useQuery<Clashes[]>('team', async ()=>{
    const response =  await axios.get(url)
    console.log(response)
    return response.data.data
  });
  
  return (
    <div className="conteiner-sub">
      <ul className='list-sub'>
        {isFetching && <p>Carregando...</p>}
        {data?.map( clashes => {
          return(
            <li key={clashes.id}>
              <p>{clashes.name_team_a} X {clashes.name_team_b}</p>
              <Logs idClaches={clashes.id}/>
            </li>
          )
        })}
      </ul>
    </div>
   
  )
}