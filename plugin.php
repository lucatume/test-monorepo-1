<?php
/**
 * Plugin Name: Test Monorepo 1
 */

function test_monorepo_1_activate(){}

register_activation_hook(__FILE__, 'test_monorepo_1_activate');

function from_monorepo_again(){}
function from_monorepo_again_2(){}
function from_github_1(){}
