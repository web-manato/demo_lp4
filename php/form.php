                <!-- コンテンツ -->
                <form action="confirm.html" class="bl_contact" method="post">

                    <!-- 名前 -->
                    <div class="bl_contact_name">
                        <div class="bl_contact_ttl">
                            <label for="name">お名前（活動名可）</label>
                            <span class="el_required">必須</span>
                        </div>
                        <input type="text" name="name" id="name" required>
                    </div>

                    <!-- 希望納期 -->
                    <fieldset>
                        <div class="bl_contact_lineGroup">
                            <legend class="bl_contact_ttl">
                                ご希望納期
                                <span class="el_required">必須</span>
                            </legend>
                            <div>
                                <label class="bl_contact_line">
                                    <input type="radio" name="line" value="standard" required>
                                    通常納期（1週間以内）
                                </label>
                                <label class="bl_contact_line">
                                    <input type="radio" name="line" value="early">
                                    早期納品（3日以内）
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <!-- 希望オプション -->
                    <fieldset>
                        <div class="bl_contact_optionGroup">
                            <legend class="bl_contact_ttl">
                                ご希望オプション
                                <span class="el_required">必須</span>
                            </legend>
                            <div>
                                <label class="bl_contact_option">
                                    <input type="checkbox" name="options[]" value="generate">
                                    ハモリ生成
                                </label>
                                <label class="bl_contact_option">
                                    <input type="checkbox" name="options[]" value="rec">
                                    ハモリ録音
                                </label>
                                <label class="bl_contact_option">
                                    <input type="checkbox" name="options[]" value="advise">
                                    アドバイス資料
                                </label>
                                <label class="bl_contact_option">
                                    <input type="checkbox" name="options[]" value="none">
                                    参考音源なし
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <!-- 内容 -->
                    <div class="bl_contact_message">
                        <div class="bl_contact_ttl">
                            <label for="message">内容</label>
                            <span class="el_required">必須</span>
                        </div>
                        <textarea name="message" id="message" required></textarea>
                    </div>

                    <!-- 送信ボタン -->
                    <div class="ly_btn">
                        <button type="submit" class="el_btn">確認画面へ</button>
                    </div>
                </form>