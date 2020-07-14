<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>Oila davrasida</title>
        <style type="text/css">
            p {
                padding: 0;
                margin: 0;
            }            
            h1, h2, h3, p, li {
                font-family: Georgia, Helvetica, sans-serif, Arial;
            }            
            td {
                vertical-align: top;
            }            
            ul, ol {
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body class="body" marginheight="0" topmargin="0" marginwidth="0" leftmargin="0" bgcolor="#cad3db" style="margin: 0px; background-color: #cad3db;">
        <table cellspacing="0" border="0" cellpadding="0" width="100%" align="center" style="margin: 0px;">
            <tbody>
                <tr valign="top">
                    <td class="ifcase" valign="top" style="background-color:#ADBBC7;">
						<table cellspacing="0" cellpadding="0" border="0" width="700" align="center" style="background-color:#9CAEBC;">
							<tbody>
								<tr>
									<td valign="top" style="padding-bottom:30px; font-family: Georgia, Helvetica, sans-serif, Arial; ">
										<table cellspacing="0" cellpadding="0" border="0" align="center" width="600">
							                <tbody>
							                    <tr>
							                        <td valign="top">
							                            <table cellspacing="0" cellpadding="0" border="0" align="center">
							                                <tbody>
							                                    <tr>
							                                        <td colspan="2" valign="top" style="padding-top: 15px; padding-bottom: 8px;">
				                                                        <p style="margin:0; color:#6e7c88; font-size: 12px; line-height: 1.4">Oila davrasida</p>
				                                                    </td>
							                                    </tr>
							                                    <tr>
							                                        <td valign="baseline" style="vertical-align:baseline; text-align: left;">
																		<h1 style="margin:0; padding:0; font-family: Gill Sans, Trebuchet MS, Helvetica, Arial, sans-serif; font-size: 34px; color:#ffffff; font-weight: normal; letter-spacing:2px;">Aloqa xati</h1>
							                                        </td>
							                                        <td valign="baseline" width="205" style="vertical-align:baseline; text-align: right; padding-top:10px;">
							                                            <span class="date" style="font-size:12px; color:#6e7c88;">{{ date("H:i, d.m.Y", strtotime($model->created_at)) }}</span>
							                                        </td>
							                                    </tr>
							                                    <tr>
							                                        <td colspan="2" width="600" valign="top" style="padding-top: 10px; padding-bottom: 15px;background-color:#cbd3db;"></td>
							                                    </tr>
											                    <tr>
											                        <td colspan="2" width="600" valign="top" style=" padding-bottom: 10px;">&nbsp;</td>
											                    </tr>							                                    
							                                </tbody>
							                            </table>
							                        </td>
							                    </tr>
							                    <tr>
							                        <td valign="top" colspan="2">
							                            <table cellspacing="0" border="0" cellpadding="0" align="center" width="600" style="margin: 0px; padding-bottom:20px;">
							                                <tbody>
							                                    <tr>
							                                        <td valign="top">
							                                            <table cellspacing="0" border="0" cellpadding="0" align="center" width="600" style="border:10px; border-style:solid; border-color:#f3f5f7; background-color: #dfe4e9;">
							                                                <tbody>
							                                                    <tr>
							                                                        <td valign="top" style="padding-top:20px; padding-bottom:20px;">
							                                                            <table cellspacing="0" border="0" cellpadding="0" align="center" width="580" style="">
							                                                            	<tbody>
							                                                            		<tr>
							                                                            			<td valign="top" height="24" style="background-color: #cbd3db;">
							                                                            				<h2 style="margin: 0; padding-left:20px; padding-top:3px; padding-bottom:3px; font-size: 24px; color: #626b73; font-weight: normal; font-family:Georgia;">
																											{{ $model->fio }}
																										</h2>
							                                                            			</td>
							                                                            		</tr>
							                                                            	</tbody>
							                                                            </table>
							                                                            <table cellspacing="0" border="0" cellpadding="0" align="center" width="540" style="padding-top:20px;">
																							<tbody>
																								<tr>
																									<td valign="top">
																										<table cellspacing="0" border="0" cellpadding="0" align="center" width="540">
																											<tbody>																												
																												<tr>
																													<td valign="top">
																														<p style="color: #798692; font-size:14px; line-height:20px;">
																															{{ $model->message }}
																														</p>
																													</td>
																												</tr>
																												<tr>
																													<td height="20" style="height:20px; line-height:0.5;">&nbsp;</td>
																												</tr>
																												<tr>
																													<td valign="top">
																														<table cellspacing="0" border="0" cellpadding="0" align="left" width="540" style="color: #798692; font-size:14px; font-family: Georgia;">
								                                                                                            <tbody>
								                                                                                                <tr>
								                                                                                                    <td valign="top" width="150" height="23" style="padding-top: 2px; padding-bottom: 2px; vertical-align:top;">
								                                                                                                        Telefon:
								                                                                                                    </td>
								                                                                                                    <td valign="top" style="padding-top: 2px; padding-bottom: 2px; vertical-align:top;">
								                                                                                                        {{ $model->phone }}
								                                                                                                    </td>
								                                                                                                </tr>
								                                                                                                <tr>
								                                                                                                    <td valign="top" width="150" height="23" style="padding-top: 2px; padding-bottom: 2px; vertical-align:top;">
								                                                                                                        Email:
								                                                                                                    </td>
								                                                                                                    <td valign="top" style="padding-top: 2px; padding-bottom: 2px; vertical-align:top;">
								                                                                                                        {{ $model->email }}
								                                                                                                    </td>
								                                                                                                </tr>
								                                                                                                <tr>
								                                                                                                    <td valign="top" width="150" height="23" style="padding-top: 2px; padding-bottom: 2px; vertical-align:top;">
								                                                                                                        Ip adres:
								                                                                                                    </td>
								                                                                                                    <td valign="top" style="padding-top: 2px; padding-bottom: 2px; vertical-align:top;">
								                                                                                                        {{ $model->ip }}
								                                                                                                    </td>
								                                                                                                </tr>
								                                                                                            </tbody>
								                                                                                        </table>
																													</td>
																												</tr>
																											</tbody>
																										</table>
																									</td>
																								</tr>
																							</tbody>
																						</table>
							                                                        </td>
							                                                    </tr>
							                                                </tbody>
							                                            </table>
							                                        </td>
							                                    </tr>
							                                </tbody>
							                            </table>
							                        </td>
							                    </tr>
												<tr>
													<td colspan="2" valign="top" style=" padding: 10px 0 20px;" class="footer">
														<p style="font-family: Georgia; margin:0; padding-bottom: 3px; padding-top: 3px; color:#6e7c88; font-size: 12px;">Oila davrasida, Aloqa bo&rsquo;limi</p>
													</td>	
												</tr>
							                    <tr>
							                        <td colspan="2" width="600" valign="top" style=" padding-bottom: 20px;">&nbsp;</td>
							                    </tr>
							                </tbody>
							            </table>
									</td>
								</tr>
							</tbody>
						</table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>