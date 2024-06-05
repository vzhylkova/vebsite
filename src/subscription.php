<?php
const SUBSCRIPTIONS_FILE = './storage/subscriptions.ser';
/**
* Дістає список із усіх підписок з файлу
* @return array
*/
function allSubscriptions()
{
 $fileContent = file_get_contents(SUBSCRIPTIONS_FILE);
 $subscriptions = unserialize($fileContent);
 return $subscriptions ? $subscriptions : [];
}
/**
* Додає запис нової підписки у файл
* @param $params
 
 */
function addSubscription($params)
{
    // Отримати список підписок
    $subscriptions = allSubscriptions();

    // Додати нову підписку до списку
    $subscriptions[] = $params;

    // Записати список підписок у файл
    file_put_contents(SUBSCRIPTIONS_FILE, serialize($subscriptions));
}
