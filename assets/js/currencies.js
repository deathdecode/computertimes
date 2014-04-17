var Currency = {
rates: {"USD":1.0,"EUR":1.38106,"GBP":1.67245,"CAD":0.91015,"ARS":0.124953,"AUD":0.934356,"BRL":0.447598,"CLP":0.00179876,"CNY":0.160715,"CYP":0.397899,"CZK":0.0502922,"DKK":0.184979,"EEK":0.0882657,"HKD":0.128961,"HUF":0.00447386,"ISK":0.00890869,"INR":0.0165577,"JMD":0.00913261,"JPY":0.0098154,"LVL":1.96592,"LTL":0.399983,"MTL":0.293496,"MXN":0.0763136,"NZD":0.859627,"NOK":0.167904,"PLN":0.329815,"SGD":0.79799,"SKK":21.5517,"SIT":175.439,"ZAR":0.0946863,"KRW":0.000960292,"SEK":0.152138,"CHF":1.13568,"TWD":0.0330808,"UYU":0.0438214,"MYR":0.30814,"BSD":1.0,"CRC":0.00182933,"RON":0.308949,"PHP":0.0224568,"AED":0.272255,"VEB":0.000159041,"IDR":8.75555e-05,"TRY":0.466624,"THB":0.0309502,"TTD":0.15502,"ILS":0.288287,"SYP":0.006812,"XCD":0.37037,"COP":0.0005164,"RUB":0.027579,"HRK":0.181208,"KZT":0.00549285,"TZS":0.00061332,"XPT":1441.03,"SAR":0.266631,"NIO":0.0381898,"LAK":0.00012465,"OMR":2.59774,"AMD":0.00241127,"CDF":0.001084,"KPW":0.00772153,"SPL":6.0,"KES":0.0115009,"ZWD":0.00276319,"KHR":0.00025069,"MVR":0.0649351,"GTQ":0.128874,"BZD":0.496428,"BYR":0.0001004,"LYD":0.805932,"DZD":0.0125937,"BIF":0.000646,"GIP":1.67245,"BOB":0.144726,"XOF":0.00210541,"STD":5.634e-05,"NGN":0.00618429,"PGK":0.361497,"ERN":0.095511,"MWK":0.0025487,"CUP":0.0377358,"GMD":0.0252566,"CVE":0.0126748,"BTN":0.0165577,"XAF":0.00210541,"UGX":0.0003965,"MAD":0.122921,"MNT":0.00056418,"LSL":0.0946863,"XAG":19.5381,"TOP":0.5492,"SHP":1.67245,"RSD":0.0119588,"HTG":0.0253807,"MGA":0.00042956,"MZN":0.0320001,"FKP":1.67245,"BWP":0.1143,"HNL":0.0523013,"PYG":0.00022623,"JEP":1.67245,"EGP":0.14323,"LBP":0.00066286,"ANG":0.558659,"WST":0.437,"TVD":0.934356,"GYD":0.00487333,"GGP":1.67245,"NPR":0.0102483,"KMF":0.00280722,"IRR":3.918e-05,"XPD":793.65,"SRD":0.305378,"TMM":7.01754e-05,"SZL":0.0946863,"MOP":0.125204,"BMD":1.0,"XPF":0.0115733,"ETB":0.0514323,"JOD":1.41143,"MDL":0.0746001,"MRO":0.003384,"YER":0.0046543,"BAM":0.706125,"AWG":0.558659,"PEN":0.359584,"VEF":0.159041,"SLL":0.00023042,"KYD":1.21951,"AOA":0.0102313,"TND":0.63012,"TJS":0.207005,"SCR":0.0815427,"LKR":0.007657,"DJF":0.0055556,"GNF":0.00014263,"VUV":0.0108404,"SDG":0.175979,"IMP":1.67245,"GEL":0.571352,"FJD":0.545617,"DOP":0.0231616,"XDR":1.54883,"MUR":0.0328948,"MMK":0.00104167,"LRD":0.0116959,"BBD":0.5,"ZMK":0.000160901,"XAU":1302.14,"VND":4.74e-05,"UAH":0.0768935,"TMT":0.350877,"IQD":0.000859,"BGN":0.706135,"KGS":0.0183724,"RWF":0.00146854,"BHD":2.6521,"UZS":0.00044014,"PKR":0.0104202,"MKD":0.0225226,"AFN":0.0177841,"NAD":0.0946863,"BDT":0.0128838,"AZN":1.27502,"SOS":0.00083404,"QAR":0.274657,"PAB":1.0,"CUC":1.0,"SVC":0.114286,"SBD":0.1376,"ALL":0.00986686,"BND":0.79799,"KWD":3.55367,"GHS":0.363307,"ZMW":0.160901,"XBT":529.01,"NTD":0.0337206},
convert: function(amount, from, to) {
return (amount * this.rates[from]) / this.rates[to];
}
}; 