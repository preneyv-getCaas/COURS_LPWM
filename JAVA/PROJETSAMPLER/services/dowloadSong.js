import * as fs from 'expo-file-system'

const downloadSongFromFreesound = async (sound, name) => {
    const dw = fs.createDownloadResumable(sound, fs.documentDirectory+name, {}, (p) => {})
    const {uri}  = await dw.downloadAsync()
    return uri
}

export default downloadSongFromFreesound