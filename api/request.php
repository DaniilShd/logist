<?php 

function request_register_test($data, $id=null)
{
    //сохранение заявки
    $errors = array();
/*
    if(($data['surname']) == '')
    {
        $errors[] = 'Введите ФИО';
    }

    if(($data['firstname']) == '')
    {
        $errors[] = 'Введите ФИО';
    }

    if(($data['lastname']) == '')
    {
        $errors[] = 'Введите ФИО';
    }

    if(($data['password']) == '')
    {
        $errors[] = 'Введите пароль!';
    }

    if(($data['password_2']) != $data['password'] )
    {
        $errors[] = 'Повторный пароль введен неверно!';
    }

    if (R::count('listemployee', "login = ?", array($data['login']))>0)
    {
        $errors[] = 'Пользователь с таким логином уже существует';
    }
*/
    if (empty($errors)) 
    {
        // регистрируем
        $request = R::dispense('requests');
        
        //$request->srochnost = $data['srochnost'];
        $request->paranepara = $data['paranepara'];
        $request->data_sozdaniya_zapisi = date("Y-m-d H:i:s");
        $request->creator = $data['creator'];
        R::store($request); 

        
     //   echo '<div style="color:green;">Вы успешно зарегистрировались</div><hr>';

    } else{
     //  echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
        return $errors;
    }
    return NULL;
}

function request_register($data, $id=null)
{
    
        if (isset($id))
        {
            $request = R::load('requests', $id);
            //$request->srochnost = $data['srochnost'];
            $request->paranepara = $data['paranepara'];
            $request->creator = $data['creator'];
            R::store($request);
//            if(isset($item->password))
//            $item->password = password_hash($_POST['item']['password'],PASSWORD_DEFAULT);
        }else
        {
            if($data['paranepara'] == 'Отгрузка')
            {

//Создаю запись в таблице заявки
$request = R::dispense('requests');
//Создаю запись в таблице связывающей номер заявки и выбранные для этой заявки авто
$request_avto = R::dispense('requestavto');

//Заполняются внесенные данные по заявке
//$request->srochnost = $data['srochnost'];
$request->paranepara = $data['paranepara'];
$request->data_sozdaniya_zapisi = date("Y-m-d H:i:s");
$request->creator = $data['creator'];
R::store($request);

//Вношу новую запись в таблицу заявка-авто , без номера авто (пустая запись)
$request = R::findOne('requests', 'ORDER BY id DESC LIMIT 1');
$request_avto->id_request = $request->id;
R::store($request_avto);

//Создается пустая запись в таблице авто на складе
$avtoNaSklade = R::dispense('avtonasklade');
//вносится id 
 $avtoNaSklade->id_request_avto = $request_avto->id;
 R::store($avtoNaSklade);

 //Создается пустая запись в таблице маршрут
$marshrut = R::dispense('marshrut');
//вносится id 
 $marshrut->id_request_avto = $request_avto->id;
 R::store($marshrut);


 



            } else {
                //Создаю запись в таблице заявки
$request = R::dispense('requests');

//Заполняются внесенные данные по заявке
//$request->srochnost = $data['srochnost'];
$request->paranepara = $data['paranepara'];
$request->data_sozdaniya_zapisi = date("Y-m-d H:i:s");
$request->creator = $data['creator'];
R::store($request);

$request = R::findOne('requests', 'ORDER BY id DESC LIMIT 1');

//Создаю маршрут для загрузки
$zag_marshrut = R::dispense('zagmarshrut');
$zag_marshrut->id_request = $request->id;
R::store($zag_marshrut);

//Создаю запись в таблице связывающей номер заявки и автомобиль
$request_avto = R::dispense('requestavto');
$request_avto->id_request = $request->id;
R::store($request_avto);

//Создается пустая запись в таблице авто на складе
$avtoNaSkladeZagruzka = R::dispense('avtonaskladezagruzka');
//вносится id 
 $avtoNaSkladeZagruzka->id_request = $request->id;
 R::store($avtoNaSkladeZagruzka);

 //Создается пустая запись в таблице маршрут
$avtovputi = R::dispense('avtovputi');
//вносится id 
 $avtovputi->id_request = $request->id;
 R::store($avtovputi);
            }
        }
        return null;
}
?>




