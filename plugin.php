<?php
/**
 * Plugin Name: Test Monorepo 1
 */

function test_monorepo_1_activate(){}

register_activation_hook(__FILE__, 'test_monorepo_1_activate');

function from_monorepo_again(){} // Github
function from_monorepo_again_2(){}
function from_github_1(){}
function from_github_2(){}
function from_monorepo_again_3(){}
function from_monorepo_again_4(){}
function from_github_3(){}
