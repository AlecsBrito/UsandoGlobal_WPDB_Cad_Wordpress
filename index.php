<?php
    /*
    Plugin Name: Cadastro
    Description: Plugin para cadastro de Pessoas no site
    Version: 1.0
    Text Domain: cadastro
    */

    function cadastro_create_table(){
        global $wpdb;

        $nomeDaTabela = $wpbd->prefix . 'cd_cadastro';

        if($wpdb->get_var("SHOW TABLES LIKE '$nomeDaTabela'") != $nomeDaTabela){
            $sql = "
                CREATE TABLE $nomeDaTabela(
                    cd_cadastro int auto_increment primary key,
                    nm_cadastro varchar(100),
                    dt_nascimento date,
                    ds_relatorio varchar(200)
                );
            ";

            require_once(ABSPATH.'wp-admin/includes/upgrade.php');

            dbDelta($sql);
        }

        add_action('init', 'cadastro_create_table');
    }