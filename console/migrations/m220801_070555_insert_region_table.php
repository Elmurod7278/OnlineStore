<?php

use yii\db\Migration;

/**
 * Class m220801_070555_insert_region_table
 */
class m220801_070555_insert_region_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        Yii::$app->db->createCommand('TRUNCATE region CASCADE')->execute();
        Yii::$app->db->createCommand('ALTER SEQUENCE region_id_seq RESTART WITH 1')->execute();

        $this->insert('{{%region}}', [
            'name_uz' => 'Andijon viloyati',
            'name_ru' => 'Андижанская область',


        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Andijon shahri',
            'name_ru' => 'Андижан город',

            'region_id' => 1,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Xonobod shahri',
            'name_ru' => 'Ханабад город',
            'region_id' => 1,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Andijon tumani',
            'name_ru' => 'Андижан район',
            'region_id' => 1,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Asaka tumani',
            'name_ru' => 'Асака район',
            'region_id' => 1,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Baliqchi tumani',
            'name_ru' => 'Баликчи район',

            'region_id' => 1,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Bo‘ston tumani',
            'name_ru' => 'Бустан район',
            'region_id' => 1,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Buloqboshi tumani',
            'name_ru' => 'Булакбаши район',
            'region_id' => 1,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Jalaquduq tumani',
            'name_ru' => 'Жалакудук район',
            'region_id' => 1,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Izboskan tumani',
            'name_ru' => 'Избаскан район',

            'region_id' => 1,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Qo‘rg‘ontepa tumani',
            'name_ru' => 'Кургантепа район',
            'region_id' => 1,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Marhamat tumani',
            'name_ru' => 'Мархамат район',
            'region_id' => 1,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Oltinko‘l tumani',
            'name_ru' => 'Олтинкул район',
            'region_id' => 1,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Paxtaobod tumani',
            'name_ru' => 'Пахтаабад район',

            'region_id' => 1,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Ulug‘nor tumani',
            'name_ru' => 'Улугнар район',
            'region_id' => 1,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Xo‘jaobod tumani',
            'name_ru' => 'Ходжаабад район',
            'region_id' => 1,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Shaxrixon tumani',
            'name_ru' => 'Шахрихан район',
            'region_id' => 1,

        ]);

        $this->insert('{{%region}}', [
            'name_uz' => 'Buxoro viloyati',
            'name_ru' => 'Бухарская область',


        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Buxoro shahri',
            'name_ru' => 'Бухара город',
            'region_id' => 2,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Kogon shahri',
            'name_ru' => 'Каган город',
            'region_id' => 2,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Buxoro tumani',
            'name_ru' => 'Бухара район',
            'region_id' => 2,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Vobkent tumani',
            'name_ru' => 'Вабкент район',

            'region_id' => 2,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Jondor tumani',
            'name_ru' => 'Жандар район',
            'region_id' => 2,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Kogon tumani',
            'name_ru' => 'Каган район',
            'region_id' => 2,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Olot tumani',
            'name_ru' => 'Алат район',
            'region_id' => 2,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Peshku tumani',
            'name_ru' => 'Пешку район',

            'region_id' => 2,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Romitan tumani',
            'name_ru' => 'Рамитан район',
            'region_id' => 2,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Shofirkon tumani',
            'name_ru' => 'Шафиркан район',
            'region_id' => 2,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Qorovulbozor tumani',
            'name_ru' => 'Каравулбазар район',
            'region_id' => 2,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Qorako‘l tumani',
            'name_ru' => 'Каракул район',

            'region_id' => 2,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'G‘ijduvon tumani',
            'name_ru' => 'Гиждуван район',
            'region_id' => 2,

        ]);

        $this->insert('{{%region}}', [
            'name_uz' => 'Jizzax viloyati',
            'name_ru' => 'Джизакская область',


        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Jizzax shahri',
            'name_ru' => 'Джизах город',

            'region_id' => 3,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Arnasoy tumani',
            'name_ru' => 'Арнасайский район',

            'region_id' => 3,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Baxmal tumani',
            'name_ru' => 'Бахмальский район',

            'region_id' => 3,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Do‘stlik tumani',
            'name_ru' => 'Дустлик район',

            'region_id' => 3,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Zarbdor tumani',
            'name_ru' => 'Зарбдорский район',

            'region_id' => 3,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Zafarobod tumani',
            'name_ru' => 'Зафарабадский район',

            'region_id' => 3,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Zomin tumani',
            'name_ru' => 'Зоминский район',

            'region_id' => 3,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Mirzacho‘l tumani',
            'name_ru' => 'Мирзачульский район',

            'region_id' => 3,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Forish tumani',
            'name_ru' => 'Форишский район',

            'region_id' => 3,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Sharof Rashidov tumani',
            'name_ru' => 'Шароф Рашидовский район',

            'region_id' => 3,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'G‘allaorol tumani',
            'name_ru' => 'Галлаорольский район',

            'region_id' => 3,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Yangiobod tumani',
            'name_ru' => 'Район Янгиабад',

            'region_id' => 3,

        ]);
        $this->insert('{{%region}}', [
            'name_uz' => 'Qashqadaryo viloyati',
            'name_ru' => 'Кашкадарьинская область',


        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Qarshi shahri',
            'name_ru' => 'Город Карши',

            'region_id' => 4,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Shahrisabz shahri',
            'name_ru' => 'Город Шахрисабз',

            'region_id' => 4,

        ]);


        $this->insert('{{%city}}', [
            'name_uz' => 'Dehqonobod tumani',
            'name_ru' => 'Дехканабадский район',

            'region_id' => 4,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Kasbi tumani',
            'name_ru' => 'Касбийский район',

            'region_id' => 4,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Kitob tumani',
            'name_ru' => 'Район Китоб',

            'region_id' => 4,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Koson tumani',
            'name_ru' => 'Косонский район',

            'region_id' => 4,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Mirishkor tumani',
            'name_ru' => 'Миришкорский район',

            'region_id' => 4,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Muborak tumani',
            'name_ru' => 'Мубарекский район',

            'region_id' => 4,

        ]);

        $this->insert('{{%city}}', [
            'name_uz' => 'Nishon tumani',
            'name_ru' => 'Нишонский район',

            'region_id' => 4,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Chiroqchi tumani',
            'name_ru' => 'Район Чирокчи',

            'region_id' => 4,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Shahrisabz tumani',
            'name_ru' => 'Шахрисабзский район',

            'region_id' => 4,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Yakkabog‘ tumani',
            'name_ru' => 'Яккабогский район',

            'region_id' => 4,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Qamashi tumani',
            'name_ru' => 'Камаши район',

            'region_id' => 4,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Qarshi tumani',
            'name_ru' => 'Район Карши',

            'region_id' => 4,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'G‘uzor tumani',
            'name_ru' => 'Гузарский район',

            'region_id' => 4,

        ]);
        $this->insert('{{%region}}', [
            'name_uz' => 'Navoiy viloyati',
            'name_ru' => 'Навоийская область',


        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Navoiy shahri',
            'name_ru' => 'Город Навои',

            'region_id' => 5,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Zarafshon shahri',
            'name_ru' => 'Город Зарафшан',

            'region_id' => 5,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Karmana tumani',
            'name_ru' => 'Район Кармана',

            'region_id' => 5,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Konimex tumani',
            'name_ru' => 'Район Конимех',

            'region_id' => 5,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Navbahor tumani',
            'name_ru' => 'Навбахорский район',

            'region_id' => 5,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Nurota tumani',
            'name_ru' => 'Нуратинский район',

            'region_id' => 5,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Tomdi tumani',
            'name_ru' => 'Томди район',

            'region_id' => 5,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Uchquduq tumani',
            'name_ru' => 'Учкудукский район',

            'region_id' => 5,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Xatirchi tumani',
            'name_ru' => 'Хатирчинский район',

            'region_id' => 5,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Qiziltepa tumani',
            'name_ru' => 'Кызылтепинский район',

            'region_id' => 5,


        ]);
        $this->insert('{{%region}}', [
            'name_uz' => 'Namangan viloyati',
            'name_ru' => 'Наманганская область',


        ]);

        $this->insert('{{%city}}', [
            'name_uz' => 'Namangan shahri',
            'name_ru' => 'Город Наманган',

            'region_id' => 6,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Kosonsoy tumani',
            'name_ru' => 'Косонсойский район',

            'region_id' => 6,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Mingbuloq tumani',
            'name_ru' => 'Район Мингбулок',

            'region_id' => 6,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Norin tumani',
            'name_ru' => 'Нарынский район',

            'region_id' => 6,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Pop tumani',
            'name_ru' => 'Поп Район',

            'region_id' => 6,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'To‘raqo‘rg‘on tumani',
            'name_ru' => 'Туракурганский район',

            'region_id' => 6,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Uychi tumani',
            'name_ru' => 'Уйчинский район',

            'region_id' => 6,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Uchqo‘rg‘on tumani',
            'name_ru' => 'Учкурганский район',

            'region_id' => 6,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Chortoq tumani',
            'name_ru' => 'Чортокский район',

            'region_id' => 6,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Yangiqo‘rg‘on tumani',
            'name_ru' => 'Янгикурганский район',

            'region_id' => 6,

        ]);
        $this->insert('{{%region}}', [
            'name_uz' => 'Samarqand viloyati',
            'name_ru' => 'Самаркандская область',


        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Samarqand shahri',
            'name_ru' => 'Город Самарканд',

            'region_id' => 7,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Kattaqo‘rg‘on shahri',
            'name_ru' => 'Город Каттакурган',

            'region_id' => 7,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Bulung‘ur tumani',
            'name_ru' => 'Булунгурский район',

            'region_id' => 7,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Jomboy tumani',
            'name_ru' => 'Джомбойский район',

            'region_id' => 7,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Kattaqo‘rg‘on tumani',
            'name_ru' => 'Каттакурганский район',

            'region_id' => 7,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Narpay tumani',
            'name_ru' => 'Нарпайский район',

            'region_id' => 7,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Nurobod tumani',
            'name_ru' => 'Нурободский район',

            'region_id' => 7,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Oqdaryo tumani',
            'name_ru' => 'Акдаринский район',

            'region_id' => 7,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Payariq tumani',
            'name_ru' => 'Паярикский район',

            'region_id' => 7,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Pastdarg‘om tumani',
            'name_ru' => 'Район Пастдаргом',

            'region_id' => 7,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Paxtachi tumani',
            'name_ru' => 'Пахтачинский район',

            'region_id' => 7,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Samarqand tumani',
            'name_ru' => 'Самаркандский район',

            'region_id' => 7,


        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Toyloq tumani',
            'name_ru' => 'Тайлакский район',

            'region_id' => 7,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Urgut tumani',
            'name_ru' => 'Ургутский район',

            'region_id' => 7,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Qo‘shrabot tumani',
            'name_ru' => 'Кошработский район',

            'region_id' => 7,

        ]);
        $this->insert('{{%region}}', [
            'name_uz' => 'Surxondaryo viloyati',
            'name_ru' => 'Сурхандарьинская область',


        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Termiz shahri',
            'name_ru' => 'Город Термез',

            'region_id' => 8,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Angor tumani',
            'name_ru' => 'Район Ангор',

            'region_id' => 8,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Boysun tumani',
            'name_ru' => 'Бойсунский район',

            'region_id' => 8,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Denov tumani',
            'name_ru' => 'Деновский район',

            'region_id' => 8,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Jarqo‘rg‘on tumani',
            'name_ru' => 'Жаркурганский район',

            'region_id' => 8,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Muzrobod tumani',
            'name_ru' => 'Музрабадский район',

            'region_id' => 8,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Oltinsoy tumani',
            'name_ru' => 'Олтинсой район',

            'region_id' => 8,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Sariosiyo tumani',
            'name_ru' => 'Сариосийский район',

            'region_id' => 8,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Termiz tumani',
            'name_ru' => 'Термезский район',

            'region_id' => 8,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Uzun tumani',
            'name_ru' => 'Район Узун',

            'region_id' => 8,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Sherobod tumani',
            'name_ru' => 'Шерабадский район',

            'region_id' => 8,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Sho‘rchi tumani',
            'name_ru' => 'Шорчинский район',

            'region_id' => 8,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Qiziriq tumani',
            'name_ru' => 'Кизирикский район',

            'region_id' => 8,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Qumqo‘rg‘on tumani',
            'name_ru' => 'Кумкурганский район',

            'region_id' => 8,

        ]);
        $this->insert('{{%region}}', [
            'name_uz' => 'Sirdaryo viloyati',
            'name_ru' => 'Сырдарьинская область',


        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Guliston shahri',
            'name_ru' => 'Город гулистан',

            'region_id' => 9,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Yangiyer shahri',
            'name_ru' => 'Город Янгиер',

            'region_id' => 9,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Shirin shahri',
            'name_ru' => 'Город Ширин',

            'region_id' => 9,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Boyovut tumani',
            'name_ru' => 'Боёвутский район',

            'region_id' => 9,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Guliston tumani',
            'name_ru' => 'Гулистанский район',

            'region_id' => 9,


        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Mirzaobod tumani',
            'name_ru' => 'Мирзаабадский район',

            'region_id' => 9,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Oqoltin tumani',
            'name_ru' => 'Околтинский район',

            'region_id' => 9,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Sardoba tumani',
            'name_ru' => 'Сардобинский район',

            'region_id' => 9,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Sayxunobod tumani',
            'name_ru' => 'Сайхунабадский район',

            'region_id' => 9,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Sirdaryo tumani',
            'name_ru' => 'Сырдарьинская область',

            'region_id' => 9,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Xovos tumani',
            'name_ru' => 'Ховосский район',

            'region_id' => 9,

        ]);
        $this->insert('{{%region}}', [
            'name_uz' => 'Toshkent viloyati',
            'name_ru' => 'Ташкентская область',


        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Nurafshon shahri',
            'name_ru' => 'Город нурафшан',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Angren shahri',
            'name_ru' => 'Город ангрен',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Bekobod shahri',
            'name_ru' => 'Город Бекабад',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Olmaliq shahri',
            'name_ru' => 'Город Алмалык',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Ohangaron shahri',
            'name_ru' => 'Город Ахангаран',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Chirchiq shahri',
            'name_ru' => 'Город Чирчик',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Yangiyo‘l shahri',
            'name_ru' => 'Город Янгиюль',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Bekobod tumani',
            'name_ru' => 'Бекабадский район',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Bo‘ka tumani',
            'name_ru' => 'Район Бука',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Bo‘stonliq tumani',
            'name_ru' => 'Бостанлыкский район',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Zangiota tumani',
            'name_ru' => 'Зангиатинский район',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Qibray tumani',
            'name_ru' => 'Кибрайский район',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Quyichirchiq tumani',
            'name_ru' => 'Куйчирчикский район',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Oqqo‘rg‘on tumani',
            'name_ru' => 'Аккурганский район',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Ohangaron tumani',
            'name_ru' => 'Ахангаранский район',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Parkent tumani',
            'name_ru' => 'Паркент Район',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Piskent tumani',
            'name_ru' => 'Пскентский район',

            'region_id' => 10,


        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Toshkent tumani',
            'name_ru' => 'Ташкентский район',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'O‘rtachirchiq tumani',
            'name_ru' => 'Район Уртачирчик',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Chinoz tumani',
            'name_ru' => 'Чинозский район',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Yuqorichirchiq tumani',
            'name_ru' => 'Юкоричирчикский район',

            'region_id' => 10,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Yangiyo‘l tumani',
            'name_ru' => 'Янгиюльский район',

            'region_id' => 10,

        ]);
        $this->insert('{{%region}}', [
            'name_uz' => 'Farg‘ona viloyati',
            'name_ru' => 'Ферганская область',


        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Farg‘ona shahri',
            'name_ru' => 'Город Фергана',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Marg‘ilon shahri',
            'name_ru' => 'Город Маргилан',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Quvasoy shahri',
            'name_ru' => 'Город Кувасай',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Qo‘qon shahri',
            'name_ru' => 'Город Коканд',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Beshariq tumani',
            'name_ru' => 'Бешарикский район',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Bog‘dod tumani',
            'name_ru' => 'Багдадский район',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Buvayda tumani',
            'name_ru' => 'Бувайдинский район',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Dang‘ara tumani',
            'name_ru' => 'Дангаринский район',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Yozyovon tumani',
            'name_ru' => 'Язъяванский район',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Quva tumani',
            'name_ru' => 'Кува район',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Qo‘shtepa tumani',
            'name_ru' => 'Коштепинский район',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Oltiariq tumani',
            'name_ru' => 'Олтиарикский район',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Rishton tumani',
            'name_ru' => 'Район Риштон',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'So‘x tumani',
            'name_ru' => 'Сохский район',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Toshloq tumani',
            'name_ru' => 'Тошлокский район',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'O‘zbekiston tumani',
            'name_ru' => 'Район Узбекистана',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Uchko‘prik tumani',
            'name_ru' => 'Район Учкуприк',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Farg‘ona tumani',
            'name_ru' => 'Ферганский район',

            'region_id' => 11,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Furqat tumani',
            'name_ru' => 'Фуркатский район',

            'region_id' => 11,

        ]);
        $this->insert('{{%region}}', [
            'name_uz' => 'Xorazm viloyati',
            'name_ru' => 'Хорезмская область',


        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Urganch shahri',
            'name_ru' => 'город Ургенч',

            'region_id' => 12,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Xiva shahri',
            'name_ru' => 'Город Хива',

            'region_id' => 12,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Bog‘ot tumani',
            'name_ru' => 'Район Богот',

            'region_id' => 12,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Gurlan tumani',
            'name_ru' => 'Гурлан район',

            'region_id' => 12,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Urganch tumani',
            'name_ru' => 'Ургенчский район',

            'region_id' => 12,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Xiva tumani',
            'name_ru' => 'Хивинский район',

            'region_id' => 12,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Xonqa tumani',
            'name_ru' => 'Хонкский район',

            'region_id' => 12,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Hazorasp tumani',
            'name_ru' => 'Хазорасп район',

            'region_id' => 12,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Shovot tumani',
            'name_ru' => 'Шовотский район',

            'region_id' => 12,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Yangiariq tumani',
            'name_ru' => 'Янгиарикский район',

            'region_id' => 12,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Yangibozor tumani',
            'name_ru' => 'Янгибозорский район',

            'region_id' => 12,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Qo‘shko‘pir tumani',
            'name_ru' => 'Кушкупирский район',

            'region_id' => 12,

        ]);
        $this->insert('{{%region}}', [
            'name_uz' => 'Toshkent shahri',
            'name_ru' => 'Город Ташкент',


        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Bektemir tumani',
            'name_ru' => 'Бектемирский район',

            'region_id' => 13,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Mirzo Ulug‘bek tumani',
            'name_ru' => 'Мирзо Улугбекский район',

            'region_id' => 13,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Mirobod tumani',
            'name_ru' => 'Мирабадский район',

            'region_id' => 13,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Olmazor tumani',
            'name_ru' => 'Олмазорский район',

            'region_id' => 13,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Sirg‘ali tumani',
            'name_ru' => 'Сергилинский район',

            'region_id' => 13,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Uchtepa tumani',
            'name_ru' => 'Учтепинский район',

            'region_id' => 13,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Chilonzor tumani',
            'name_ru' => 'Чиланзарский район',

            'region_id' => 13,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Shayxontohur tumani',
            'name_ru' => 'Шайхонтохурский район',

            'region_id' => 13,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Yunusobod tumani',
            'name_ru' => 'Юнусабадский район',

            'region_id' => 13,


        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Yakkasaroy tumani',
            'name_ru' => 'Яккасарайский район',

            'region_id' => 13,

        ]);
        $this->insert('{{%city}}', [
            'name_uz' => 'Yashnobod tumani',
            'name_ru' => 'Яшнабадский район',

            'region_id' => 13,

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220801_070555_insert_region_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220801_070555_insert_region_table cannot be reverted.\n";

        return false;
    }
    */
}
