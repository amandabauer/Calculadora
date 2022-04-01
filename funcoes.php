<?php 
   class Funcoes
   {
   
       public $val1;
       public $val2;
   
       public function Adicao($val1,$val2){
           $_SESSION['valor1']=$val1+$val2;
           $_SESSION['display']=null;
           $_SESSION['valor2']=null;
           if($_POST['botao']!='='){
               $_SESSION['operador']=$_POST['botao'];
           }else{
               $_SESSION['operador']='N';
               $_SESSION['display']=$_SESSION['valor1'];
           }
       
       }
      public function Subtracao($val1,$val2){
           $_SESSION['valor1']=$val1-$val2;
           $_SESSION['display']=null;
           $_SESSION['valor2']=null;
           if($_POST['botao']!='='){
               $_SESSION['operador']=$_POST['botao'];
           }else{
               $_SESSION['operador']='N';
               $_SESSION['display']=$_SESSION['valor1'];
           }
       
       }
       
       public function Multiplicacao($val1,$val2){
           $_SESSION['valor1']=$val1*$val2;
           $_SESSION['display']=null;
           $_SESSION['valor2']=null;
           if($_POST['botao']!='='){
               $_SESSION['operador']=$_POST['botao'];
           }else{
               $_SESSION['operador']='N';
               $_SESSION['display']=$_SESSION['valor1'];
           }
       
       }
       
      public function Divisao($val1,$val2){
       if($val2==0){
           $_SESSION['display']='Impossível dividir por zero!';
           unset($_SESSION['valor1']);
           unset($_SESSION['valor2']);
           unset($_SESSION['operador']);
       }else{
           $_SESSION['valor1']=$val1/$val2;
           $_SESSION['display']=null;
           $_SESSION['valor2']=null;
           if($_POST['botao']!='='){
               $_SESSION['operador']=$_POST['botao'];
           }else{
               $_SESSION['operador']='N';
               $_SESSION['display']=$_SESSION['valor1'];
           }
       }
       }
       
       function funcionamento(){
           
       if($_POST['botao']=='C'){
           unset($_SESSION['display']);
           unset($_SESSION['valor1']);
           unset($_SESSION['valor2']);
           unset($_SESSION['operador']);
       }
       if(empty($_SESSION['operador'])){
           $_SESSION['operador']=null;
       }
       if(!isset($_SESSION['display'])){
           $_SESSION['display']=null;
       }
       if(empty($_SESSION['valor1'])){
           $_SESSION['valor1']=null;
       }
       if(empty($_SESSION['valor2'])){
           $_SESSION['valor2']=null;
       }
        if(isset($_POST['botao'])){
   
            if($_SESSION['display']=='Impossível dividir por zero!'){
              $_SESSION['display']='';
            }
   
           if($_POST['botao']!='-' && $_POST['botao']!='+'
                                   && $_POST['botao']!='*' 
                                   && $_POST['botao']!='/'
                                   && $_POST['botao']!='='
                                   && $_POST['botao']!='C'){
                                           if($_SESSION['operador']=='N'){
                                               $_SESSION['display']=$_POST['botao'];
                                               $_SESSION['valor1']='';
                                               $_SESSION['operador']='';
                                           }else{
                                           $_SESSION['display'].=$_POST['botao'];}
                                   }
                                  
           if($_POST['botao']=='-' || $_POST['botao']=='+'
                                   || $_POST['botao']=='*' 
                                   || $_POST['botao']=='/'
                                   || $_POST['botao']=='='){
                                       if ($_SESSION['valor1']==''){
                                       $_SESSION['valor1']=$_SESSION['display'];
                                       $_SESSION['display']='';
                                       $_SESSION['operador']=$_POST['botao'];
                                       }else if($_SESSION['valor2']==null){
                                           if($_SESSION['operador']=='N'){
                                               $_SESSION['operador']=$_POST['botao'];}
                                          else{
                                               $_SESSION['valor2']=$_SESSION['display'];
                                               $_SESSION['display']=null;
                                                   }
                                                   if((is_null($_SESSION['valor2']))&& $_SESSION['valor2']!="0"){                                            
                                                       $_SESSION['display']=null;
                                                   }else{
                                                       if($_SESSION['operador']=='+'){
                                                           $this->Adicao((double)$_SESSION['valor1'],(double)$_SESSION['valor2']);
                                                       }else if($_SESSION['operador']=='-'){
                                                           $this->Subtracao((double)$_SESSION['valor1'],(double)$_SESSION['valor2']);
                                                       }else if($_SESSION['operador']=='*'){
                                                           $this->Multiplicacao((double)$_SESSION['valor1'],(double)$_SESSION['valor2']);
                                                       }else if($_SESSION['operador']=='/'){
                                                           $this->Divisao((double)$_SESSION['valor1'],(double)$_SESSION['valor2']);
                                                       } 
                                                   }
                                       }
       
                                   }
         }
   }
   }
   ?>