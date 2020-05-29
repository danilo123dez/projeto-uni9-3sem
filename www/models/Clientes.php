<?php 

class Clientes extends model {
    
    public function create(array $param){
        try{
            $sql = $this->db->prepare("INSERT INTO cliente (usuario, email, senha) VALUES ( :usuario, :email, :senha)");
            $sql->execute([
                ':usuario' => $param['usuario'],
                ':email' => $param['email'],
                ':senha' => $param['senha']
            ]);
            return $sql->rowCount();
        }catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        } 
    }

    public function findBy(array $params){
        try{
            $where = '';
            $count = 0;
            foreach($params as $index => $param){
                if($count === 0){
                    $where .= $index . '=' . "'".$param."'" ;
                }else{
                    $where .= ' AND ' .$index . '=' . "'".$param."'";
                }
                $count++;
            }
            
            $sql = $this->db->query("SELECT senha, usuario FROM cliente WHERE $where");
            if($sql->rowCount() > 0){
                $sql = $sql->fetch();
                return $sql;
            }else{
                return 0;
            }
        }catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
        } 
    }

}