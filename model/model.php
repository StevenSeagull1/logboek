<?php
function getlogboek(){
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM elog");
    $logboek = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $logboek;
}
function savelog() {
    
        $datum = filter_input(INPUT_POST,'datum',FILTER_SANITIZE_SPECIAL_CHARS);
        $doen = filter_input(INPUT_POST,'doen',FILTER_SANITIZE_SPECIAL_CHARS);
        $hoe = filter_input(INPUT_POST,'hoe',FILTER_SANITIZE_SPECIAL_CHARS);
        $terugblik = filter_input(INPUT_POST,'terugblik',FILTER_SANITIZE_SPECIAL_CHARS);
        $vak2 = filter_input(INPUT_POST,'vak',FILTER_VALIDATE_INT);    

        if(is_string($datum) && is_string($doen) && is_int($vak2) && is_string($hoe) && is_string($terugblik) &&(!empty($datum) &&($vak2>0) && !empty($doen) && !empty($hoe) && !empty($terugblik)));
        {
            global $pdo;
            $query = "INSERT into elog (datum, doen, hoe, terugblik, vak2) VALUES(:datum,:doen,:hoe,:terugblik,:vak2)";
            $stmt1 = $pdo->prepare($query);
            try{
                $result = $stmt1->execute([':datum'=>$datum,':vak2'=>$vak2,':doen'=>$doen,':hoe'=>$hoe,':terugblik'=>$terugblik]);
                if($result){
                    return true;
                }
            }
            catch(Exception $e) 
            {
                return false;
        } 
    } 
    return false;     
}
function getvakken(){
    GLOBAL $pdo;
    $stmt = $pdo->query('SELECT * FROM vak');
    $vak = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $vak;
}

function deletelog(): bool
{   
    global $pdo;
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    if($id){
    $query = ('DELETE FROM elog WHERE id = :id');
    $stmt1 = $pdo -> prepare($query);
    $stmt1 -> bindParam ("id",$id);
    try
    {
    $result = $stmt1->execute();
    return $result;
    }
    catch(Exception $epdo){
        return False;
        }
    }
}   

function updatelog(){
    global $pdo;
    $query = 'UPDATE elog
    SET datum = :datum, hoe = :hoe, terugblik = :terugblik, doen = :doen, vak = :vak
    WHERE id = :id';
    $stmt1 = $pdo -> prepare($query);
    $stmt1 -> bindParam ("id",$id);
}


?>