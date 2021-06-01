# Main screens 
<div align="left"><h3>Welcome Page / Soundboard</h3><img align="left" src="./assets/soundboard.jpg" alt="Soundboard page" width="200" height="350"><h3>Edit Button SoundBoard / Local Library</h3><img src="./assets/localLib.jpg" align="center" alt="Soundboard page" width="200" height="350"></div><div><h3>Edit Button SoundBoard / Record sound</h3><img src="./assets/micro.jpg" alt="Soundboard page" width="200" height="350"></div><div><h3>Edit Button SoundBoard / Download freesound</h3><img src="./assets/freesound.jpg" alt="Soundboard page" width="200" height="350"></div>

# Main functions
## Playing the button sound.
To do so, just push one time the button.
## Editing the button 
Maintain the button pressure. You'll be redirect to the Edit Page
Once you're here you can : 
* Set the button's color
* Select which part of the sound you'll be able to play
* Set the sound by choosing one in the local lib tab panel (the first one from the left) - You'll be able to listen it before choosing it as well - You can sort all sound by selectingone filter between "DEFAULT", "DOWNLOAD", "RECORDED" and "ALL"
* Record your own song in the mirco tab panel (the second one) - You'll be able to replay the sound before saving it.
* Search a sound on the freesound API in the last tab panel - You'll be able to play the sound before downloading it.
Something important to get : You cannot set a button(pad)'s sound from the micro tab panel or the freesound tab panel. Only once you've have recorded or downloaded one sound,
you can set the pad's sound with it by choosing it in the local lib tab panel.
# Store explained

The store use three reducers :
## btnSoundBoard (btnSlice.js)
There is four functions :
* editColor
* editSound
* editStartAt
* editFinishAt
## filterLocalLib (filterSlice.js)
There is one function :
* editFilter
## librairieLocale (librairieSlice.js)
There is two functions : 
* add
* update



# The Project Structure

    +-- components
    |   +-- Edit
    |   |   +-- Freesound.js
    |   |   +-- Locallib.js
    |   |   +-- Micro.js
    |   |   +-- Sample.js
    |   +-- Filter
    |   |   +-- filterComp.js
    |   +-- reusable
    |   |   +-- color.js
    |   |   +-- defaultBtn.js
    |   |   +-- defaultSong.js
    |   |   +-- freesoundAPI.js
    |   |   +-- songInfo.js
    |   +-- Soundboard.js
    +-- reducers
    |   +-- btnSlice.js
    |   +-- filterSlice.js
    |   +-- librairieSlice.js
    +-- services
    |   +-- downloadSong.js
    |   +-- playSong.js
    |   +-- requestPermission.js
    +-- store
    |   +-- store.js.js
    +-- style
    |   +-- communs.js
    |   +-- listSon.js
    +-- App.js
