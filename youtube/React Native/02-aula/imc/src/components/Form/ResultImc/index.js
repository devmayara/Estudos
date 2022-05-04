import React from "react";
import { View, Text, TouchableOpacity, Share } from "react-native";
import styles from "./style";

export default function ResultImc(props){

    const onShare = async () => {
        const result = await Share.share({
            message:"Seu IMC hoje é: "+props.resultImc,
        })
    }

    return(
        <View style={styles.resultImc}>
            <View>
                <TouchableOpacity>
                    
                </TouchableOpacity>
            </View>
            <Text style={styles.information}>{props.messageResultImc}</Text>
            <Text style={styles.numberImc}>{props.resultImc}</Text>
        </View>
    );
}