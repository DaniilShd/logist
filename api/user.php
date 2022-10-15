<?php 
function user_login($data,$_sess_descr='logged_user')
{
	$errors = array();
    $user = R::findOne('listemployee', 'login = ?', array($data["login"]));
    if ($user)
    {
        //if(password_verify($data['password'], $user->password))
        if($data['password'] == $user->password)
        {
            $_SESSION[$_sess_descr] = $user;
            return null;
        } else{
            $errors[] = 'Неверно введен пароль';
        }
    } else 
    {
            $errors[] = 'Пользователь с таким логином не найден';
    }
	return $errors;
}

function user_info($id)
{
	return R::load('listemployee',$id);
}

function user_register($data)
{
    //регистрация
    $errors = array();
    if( trim($data['login']) == '')
    {
        $errors[] = 'Введите логин!';
    }

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

    if (empty($errors)) 
    {
        // регистрируем
        $user = R::dispense('listemployee');
        
        $user->surname = $data['surname'];
        $user->firstname = $data['firstname'];
        $user->lastname = $data['lastname'];
        $user->login = $data['login'];
        $user->password = password_hash($data['password'],PASSWORD_DEFAULT);
        $user->id_department = (int) $data['department'];
        R::store($user);

        
     //   echo '<div style="color:green;">Вы успешно зарегистрировались</div><hr>';

    } else{
     //  echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
        return $errors;
    }
    return NULL;
}
?>

