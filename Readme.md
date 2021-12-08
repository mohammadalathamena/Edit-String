# Hamming And Levenshtein Calculater


## Reqierment
### 1- php 7.4^

### 2- composer 2


## Installation 
### 1- install package with composer 
```sh
composer install 
```

### 2- run with server 
```sh
    php -S 0.0.0.0:8080
```
### 3- open web page  
 open any browser and go to   0.0.0.0:8080

## run with command line 
instead of web page you can use command line to run project 
### 1- use Hamming 
```sh
   php cmd.php Hamming < first string > <second string >
```
#### example 
```sh
   php cmd.php Hamming asd qwe
```
### 2- use Levenshtein 
```sh
   php cmd.php Levenshtein < first string > <second string >
```

#### example 
```sh
   php cmd.php Hamming asd qweaw
```
## test
 You can run test by run this command in terminal 
 ### 1- Hamming Test
 ```sh
   php cmd.php HammingTest <first string > <second string > <correct answer >
```
#### example 
```sh
   php cmd.php HammingTest asd qwe 3 
```
 ### 2- Levenshtein Test
 ```sh
   php cmd.php LevenshteinTest <first string > <second string > <correct answer >
```
#### example 
```sh
   php cmd.php HammingTest asd qweaw 5
```
## License

MIT


