<?php

/**
 * @file
 * Configuration file for Drupal's multi-site directory aliasing feature.
 *
 * This file allows you to define a set of aliases that map hostnames, ports, and
 * pathnames to configuration directories in the sites directory. These aliases
 * are loaded prior to scanning for directories, and they are exempt from the
 * normal discovery rules. See default.settings.php to view how Drupal discovers
 * the configuration directory when no alias is found.
 *
 * Aliases are useful on development servers, where the domain name may not be
 * the same as the domain of the live server. Since Drupal stores file paths in
 * the database (files, system table, etc.) this will ensure the paths are
 * correct when the site is deployed to a live server.
 *
 * To use this file, copy and rename it such that its path plus filename is
 * 'sites/sites.php'. If you don't need to use multi-site directory aliasing,
 * then you can safely ignore this file, and Drupal will ignore it too.
 *
 * Aliases are defined in an associative array named $sites. The array is
 * written in the format: '<port>.<domain>.<path>' => 'directory'. As an
 * example, to map http://www.drupal.org:8080/mysite/test to the configuration
 * directory sites/example.com, the array should be defined as:
 * @code
 * $sites = array(
 *   '8080.www.drupal.org.mysite.test' => 'example.com',
 * );
 * @endcode
 * The URL, http://www.drupal.org:8080/mysite/test/, could be a symbolic link or
 * an Apache Alias directive that points to the Drupal root containing
 * index.php. An alias could also be created for a subdomain. See the
 * @link http://drupal.org/documentation/install online Drupal installation guide @endlink
 * for more information on setting up domains, subdomains, and subdirectories.
 *
 * The following examples look for a site configuration in sites/example.com:
 * @code
 * URL: http://dev.drupal.org
 * $sites['dev.drupal.org'] = 'example.com';
 *
 * URL: http://localhost/example
 * $sites['localhost.example'] = 'example.com';
 *
 * URL: http://localhost:8080/example
 * $sites['8080.localhost.example'] = 'example.com';
 *
 * URL: http://www.drupal.org:8080/mysite/test/
 * $sites['8080.www.drupal.org.mysite.test'] = 'example.com';
 * @endcode
 *
 * @see default.settings.php
 * @see conf_path()
 * @see http://drupal.org/documentation/install/multi-site
 */
/* $sites['usa.dtdc.com'] = 'usa.dtdc.com';
$sites['uk.dtdc.com'] = 'uk.dtdc.com';*/
/* $sites['stage-usa.dtdc.com'] = 'usa.dtdc.com';*/
$sites['usa.dtdc.com'] = 'usa.dtdc.com'; 
$sites['uk.dtdc.com'] = 'uk.dtdc.com'; 
$sites['stage-usa.dtdc.com'] = 'usa.dtdc.com';
$sites['stage-uk.dtdc.com'] = 'uk.dtdc.com';
$sites['uae.dtdc.com'] = 'uae.dtdc.com';
$sites['stage-uae.dtdc.com'] = 'uae.dtdc.com';
$sites['singapore.dtdc.com'] = 'singapore.dtdc.com';
$sites['stage-singapore.dtdc.com'] = 'singapore.dtdc.com';
$sites['srilanka.dtdc.com'] = 'srilanka.dtdc.com';
$sites['stage-srilanka.dtdc.com'] = 'srilanka.dtdc.com';
$sites['bangladesh.dtdc.com'] = 'bangladesh.dtdc.com';
$sites['stage-bangladesh.dtdc.com'] = 'bangladesh.dtdc.com';
$sites['pakistan.dtdc.com'] = 'pakistan.dtdc.com';
$sites['nepal.dtdc.com'] = 'nepal.dtdc.com';
$sites['stage-nepal.dtdc.com'] = 'nepal.dtdc.com';
$sites['canada.dtdc.com'] = 'canada.dtdc.com';
$sites['stage-canada.dtdc.com'] = 'canada.dtdc.com';
$sites['hongkong.dtdc.com'] = 'hongkong.dtdc.com';
$sites['stage-hongkong.dtdc.com'] = 'hongkong.dtdc.com';
$sites['china.dtdc.com'] = 'china.dtdc.com';
$sites['stage-china.dtdc.com'] = 'china.dtdc.com';
$sites['kenya.dtdc.com'] = 'kenya.dtdc.com';
$sites['stage-kenya.dtdc.com'] = 'kenya.dtdc.com';
$sites['malaysia.dtdc.com'] = 'malaysia.dtdc.com';
$sites['stage-malaysia.dtdc.com'] = 'malaysia.dtdc.com';
$sites['nz.dtdc.com'] = 'nz.dtdc.com';
$sites['thailand.dtdc.com']  = 'thailand.dtdc.com';
$sites['oman.dtdc.com'] = 'oman.dtdc.com';
$sites['stage-oman.dtdc.com'] = 'oman.dtdc.com';
$sites['de.dtdc.com'] = 'de.dtdc.com'; 
$sites['stage-de.dtdc.com'] = 'de.dtdc.com'; 
