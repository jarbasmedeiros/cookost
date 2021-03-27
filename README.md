# Cookost API

![GitHub release (latest SemVer)](https://img.shields.io/github/v/release/jarbasmedeiros/cookost?style=for-the-badge)
![GitHub repo size](https://img.shields.io/github/repo-size/jarbasmedeiros/cookost?color=orange&style=for-the-badge)
![badge](https://img.shields.io/github/license/jarbasmedeiros/devs-notes-api?style=for-the-badge)

>Cookost is a API for SWAT4 Servers.  This API is used to real-time statistics system of 
player versus player. It was developed with Laravel 7.3 LTS.

>Server tracking is implemented with the help of ``Xinecraft/Swat-KOST``.

## Installation

To install clone the repo:

``git clone git@github.com:jarbasmedeiros/cookost.git``

``cd cookost``

``composer install``

``php artisan key:generate``

``php artisan migrate``

## Required Streaming Software

* [swat-utils](https://github.com/sergeii/swat-utils)
* [swat-http](https://github.com/sergeii/swat-http)
* [swat-julia](https://github.com/sergeii/swat-julia)
* [Swat-KOST](https://github.com/Xinecraft/Swat-KOST)

## Streaming to Cookost API

1. You have to install the `Swat-KOST <https://github.com/Xinecraft/Swat-KOST>`_ package:

    a. Install the package by copying the 4 .u files into your server's System directory:
        
        Utils.u
        HTTP.u
        Julia.u
        KOST.u
    
    b. Make sure ``Swat4DedicatedServer.ini`` looks similar::
        
        [Engine.GameEngine]
        EnableDevTools=False
        InitialMenuClass=SwatGui.SwatMainMenu
        ...
        ServerActors=AMMod.AMGameMod
        ...
        ServerActors=Utils.Package
        ServerActors=HTTP.Package
        ServerActors=Julia.Core
        ServerActors=KOST.Extension
        
        [Julia.Core]
        Enabled=True
        
        [KOST.Extension]
        Enabled=True
        URL=http://example.org/
        ServerUID=1
        Key=123456789
        Compatible=True
    
    c.   Start the server and enjoy :)  
    
## License

The Devs Note is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
