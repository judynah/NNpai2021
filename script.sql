create table "PlantData"
(
    "id_plantData"   serial
        constraint plantdata_pk
            primary key,
    date_of_buy      varchar(100),
    temperature      integer,
    pot_diameter     integer,
    id_plant_history integer,
    species          varchar(100)
);

alter table "PlantData"
    owner to iyngekobnqityw;

create unique index plantdata_id_plantdata_uindex
    on "PlantData" ("id_plantData");

create table "ActionType"
(
    "id_actionType" serial
        constraint actiontype_pk
            primary key,
    name            varchar(255) not null,
    image           bytea
);

alter table "ActionType"
    owner to iyngekobnqityw;

create unique index actiontype_id_actiontype_uindex
    on "ActionType" ("id_actionType");

create table "PlantHistory"
(
    "id_plantHistory" serial
        constraint planthistory_pk
            primary key,
    id_action_type    integer not null
        constraint planthistory_actiontype_id_actiontype_fk
            references "ActionType",
    date              date
);

alter table "PlantHistory"
    owner to iyngekobnqityw;

create table "Plants"
(
    id_plant         integer default nextval('"Plant_id_plant_seq"'::regclass) not null
        constraint plant_pk
            primary key,
    name             varchar(100)                                              not null,
    id_plant_data    integer
        constraint plants_plantdata_fk
            references "PlantData"
            on update cascade on delete cascade,
    id_plant_history integer
        constraint plants_planthistory_id_planthistory_fk
            references "PlantHistory",
    image            varchar(255),
    id_user          integer default 0                                         not null
);

alter table "Plants"
    owner to iyngekobnqityw;

create unique index plant_id_plant_uindex
    on "Plants" (id_plant);

create table "PlantActions"
(
    "id_plantAction" integer default nextval('"Plant_action_id_history_item_seq"'::regclass) not null
        constraint plantsactions_pk
            primary key,
    id_action_type   integer                                                                 not null
        constraint plants_actions_actiontype_id_actiontype_fk
            references "ActionType",
    is_on            boolean default false,
    date             date,
    time             time,
    id_plant         integer
        constraint plantactions_plants_id_plant_fk
            references "Plants"
);

alter table "PlantActions"
    owner to iyngekobnqityw;

create unique index plant_action_id_history_item_uindex
    on "PlantActions" ("id_plantAction");

create unique index planthistory_id_planthistory_uindex
    on "PlantHistory" ("id_plantHistory");

create table "UserInfo"
(
    "id_userInfo"    integer      default nextval('"UserInfo_is_userInfo_seq"'::regclass) not null
        constraint userinfo_pk
            primary key,
    name             varchar(100) default 'add name'::character varying                   not null,
    surname          varchar(255) default 'add surname'::character varying,
    date_of_birth    varchar(100) default 'add date'::character varying,
    city             varchar(100) default 'add city'::character varying,
    postcode         varchar(100) default 'add postcode'::character varying,
    street           varchar(255) default 'add street'::character varying,
    house_number     integer      default 0,
    apartment_number integer      default 0,
    phone_number     varchar(100) default 'add phone number'::character varying,
    photo            varchar(255) default 'add photo'::character varying
);

alter table "UserInfo"
    owner to iyngekobnqityw;

create table "Users"
(
    id_user      integer default nextval('users_id_user_seq'::regclass) not null
        constraint users_pk
            primary key,
    email        varchar(255)                                           not null,
    password     varchar(255)                                           not null,
    enabled      boolean default false,
    created_at   date,
    id_user_info integer
        constraint users_userinfo_is_userinfo_fk
            references "UserInfo"
            on update cascade on delete cascade
);

alter table "Users"
    owner to iyngekobnqityw;

create unique index users_id_user_uindex
    on "Users" (id_user);

create unique index userinfo_is_userinfo_uindex
    on "UserInfo" ("id_userInfo");

create table "AnnouncementType"
(
    "id_announcementType" serial
        constraint announcementtype_pk
            primary key,
    name                  varchar(100),
    image                 bytea,
    notice                varchar(255)
);

alter table "AnnouncementType"
    owner to iyngekobnqityw;

create table "Announcemets"
(
    id_announcement      serial
        constraint announcemets_pk
            primary key,
    id_user              integer not null
        constraint announcemets_users_id_user_fk
            references "Users",
    id_announcement_type integer not null
        constraint announcemets_announcementtype_id_announcementtype_fk
            references "AnnouncementType",
    id_plant             integer not null
        constraint announcemets_plants_id_plant_fk
            references "Plants",
    plant_photo          bytea,
    notice               varchar(255)
);

alter table "Announcemets"
    owner to iyngekobnqityw;

create unique index announcemets_id_announcement_uindex
    on "Announcemets" (id_announcement);

create unique index announcementtype_id_announcementtype_uindex
    on "AnnouncementType" ("id_announcementType");


INSERT INTO public."Plants"  ("name", "image", "id_user")
VALUES ('Hania', 'thimo-van-leeuwen-nz08m1BF8Io-unsplash_copy.jpg', '7');

INSERT INTO public."PlantData" ( "date_of_buy", "temperature", "pot_diameter", "species")
VALUES ('15-12-2021', '25', '10', 'Fitonia');

